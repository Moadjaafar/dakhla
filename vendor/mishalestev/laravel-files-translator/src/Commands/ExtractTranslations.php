<?php

namespace TranslationExtractor\Commands;


use DOMXPath;
use DOMDocument;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\View\Compilers\BladeCompiler;
use Stichoza\GoogleTranslate\GoogleTranslate;
# installed: composer require stichoza/google-translate-php [docs](https://github.com/Stichoza/google-translate-php)
# it doesn't recognize non-native HTML tags.
# it removes all blade directives
/* create 2 options either user manually deletes every blade directive with <!-- --> or user 
uses a new function (with bugs) that does all for user */
# give an option to replace the file like --force in git and have the standard one as a new file with _translated.blade.php suffix.

class ExtractTranslations extends Command
{
    protected $signature = 'translate:file 
                            {--lang=en : The target language for translations} 
                            {--input= : Path to the Blade or HTML file to process} 
                            {--output= : Path to the translation file to generate}
                            {--force : Overwrite the input file with translated text if Blade directives are already commented}
                            ';
    protected $description = 'Extract text from an HTML or Blade file and generate translation files.';

    public function handle()
    {
        $language = $this->option('lang');
        $inputFile = $this->option('input');
        $outputPath = $this->option('output');
        $force = $this->option('force') ?? false; // Default to false if not provided

        if ($force) {
            echo "Force mode enabled: Original file will be modified.\n";
        }

        if (!$inputFile || !File::exists($inputFile)) {
            $this->error('Please provide a valid input file path using --input.');
            return 1;
        }

        if (!$outputPath) {
            $this->error('Please provide an output path for the translation file using --output.');
            return 1;
        }

        $content = File::get($inputFile);
        $compiledContent = $this->bladeDirectivesToPHP($content);

        $dom = new DOMDocument;
        @$dom->loadHTML($this->setHTMLEncoding($compiledContent), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $xpath = new DOMXPath($dom);
        $nodes = $xpath->query('//text()[not(ancestor::style)]');

        $texts = [];
        $nodeMap = [];
        echo "Processing texts and corresponding keys ...\n";
        foreach ($nodes as $node) {

            // ignore empty elements
            if (!trim($node->nodeValue)) continue;

            // remove all whitespaces through the sentense
            $standardizedText = preg_replace("/\s+/", " ", $node->nodeValue);

            // // escape all double quotes for the translation file
            // $escapedText = str_replace('"', '\\"', $standardizedText);

            $key = "key_" . md5($standardizedText);
            $texts[$key] = $standardizedText;

            // Map the node to its replacement key
            $nodeMap[$node->getNodePath()] = $key;
        }

        // Save & write changes
        $path = preg_replace("/^(\/?\w+\/\w+\/)|.php/", "", $outputPath);
        if ($force) {
            // Directly modify the input file
            $originalDOM = new DOMDocument();
            @$originalDOM->loadHTML($this->setHTMLEncoding($content), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $originalPath = new DOMXpath($originalDOM);

            // replacing each text with corresponding translation key
            echo "Changing $inputFile with replaced translation keys ...\n";
            foreach ($nodeMap as $nodePath => $key) {
                $originalNode = $originalPath->query($nodePath)->item(0);
                if ($originalNode) {
                    $originalNode->nodeValue = "{{ __('$path.$key') }}";
                }
            }

            // Save the updated content back to the original file
            File::put($inputFile, $originalDOM->saveHTML());
        } else {
            // replace each text with corresponding translation key
            echo "Creating $inputFile with replaced translation keys ...\n";
            foreach ($nodeMap as $nodePath => $key) {
                $node = $xpath->query($nodePath)->item(0);
                if ($node) {
                    $node->nodeValue = "{{ __('$path.$key') }}";
                }
            }

            // create a file
            $newFilePath = preg_replace("/\.blade\.php$/", "_translated.blade.php", $inputFile);
            $dirPath = dirname($newFilePath);
            File::ensureDirectoryExists($dirPath);
            File::put($newFilePath, $dom->saveHTML());
        }

        // Generate the translation array
        $translatedFrom = "<?php\n\ndeclare(strict_types=1);\n\nreturn [\n";
        echo "Creating original language translation file ...\n";
        foreach ($texts as $key => $value) {
            $translatedFrom .= "\"$key\" => <<<TEXT\n";
            $translatedFrom .= "$value\n";
            $translatedFrom .= "TEXT,\n";
        }
        $translatedFrom .= "];\n";

        // Generate the translation array
        $totalItems = count($texts);
        $progress = 0;
        $stage = 0;
        $count = 0;
        $translatedTo = "<?php\n\ndeclare(strict_types=1);\n\nreturn [\n";
        echo "Translating on $language ...\n";

        foreach ($texts as $key => $value) {
            $tr = new GoogleTranslate($language);
            $translation = $tr->translate($value);
            $translatedTo .= "\"$key\" => <<<TEXT\n";
            $translatedTo .= "$translation\n";
            $translatedTo .= "TEXT,\n";

            // progress counter
            $count++;
            $progress += (float)(100 / $totalItems);
            if ($totalItems > 10) {
                if ($progress >= $stage) {
                    $stage += (float)(1000 / $totalItems);
                    print_r("Progress: " . round($progress, 1) . "%\n");
                }
            }
        }
        $translatedTo .= "];\n";

        // 1. Save extracted text
        $outputDir = dirname($outputPath);
        File::ensureDirectoryExists($outputDir);
        File::put($outputPath, $translatedFrom);
        // 2. Save translated file
        $translatedFromArray = explode("/", $outputPath);
        $translatedFromArray[1] = $language;
        $translatedToPath = implode("/", $translatedFromArray);
        $translatedToDir = dirname($translatedToPath);
        File::ensureDirectoryExists($translatedToDir);
        File::put($translatedToPath, $translatedTo);

        $this->info("Extracted text saved to: $outputPath");
        $this->info("Extracted text translation saved to: $outputPath");
        $this->info("Updated HTML saved to: $inputFile");
        $this->info("Success 🚀 100%");
        return 0;
    }


    function bladeDirectivesToPHP($bladeTemplate)
    {
        $bladeCompiler = app(BladeCompiler::class);

        // Compile the Blade template into PHP code.
        $compiledTemplate = $bladeCompiler->compileString($bladeTemplate);

        // Strip PHP code (which includes compiled Blade directives).
        $cleanedTemplate = preg_replace('/<\?php.*?\?>/s', '', $compiledTemplate);
        return $cleanedTemplate;
    }

    public function setHTMLEncoding($html)
    {
        if (preg_match('/<html.*?>/i', $html)) {
            return $html;
        } else {
            return "<!DOCTYPE html>\n" .
                "<html lang='en'>\n" .
                "<head><meta charset='UTF-8'></head>\n" .
                "<body>\n" .
                $html .
                "\n</body>\n</html>";
        }
    }
}
