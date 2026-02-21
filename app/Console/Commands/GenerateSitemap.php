<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $locales = ['en', 'fr', 'es']; // Supported languages
        $base_url = config('app.url'); // Get the base URL from the Laravel config
    
        $routes = [
            '/' => 1.0,
            '/local/en' => 1.0,
            '/local/fr' => 1.0,
            '/local/es' => 1.0,
            '/offers' => 1.0,
            '/About-us' => 0.8,
            '/Blog' => 0.8,
            '/Contact-us' => 0.7,
            '/excursion-dakhla-4x4' => 0.9,
            '/brochure-excursion-demi-journee-4x4' => 0.9,
            '/excursion-aarich-village-sahraoui' => 0.9,
            '/voyage-en-catamaran-dans-grande-baie' => 0.9,
            '/balade-dos-chameau-desert-dakhla' => 0.9,
            '/excursion-quad-desert-dakhla' => 0.9,
            '/surf-sessions-dakhla' => 0.9,
            '/explore-dakhla' => 0.9,
            '/decouvrez-dakhla-Excursion' => 0.9,
            '/decouvrez-dakhla-Quad' => 0.9,
            '/decouvrez-dakhla-restaurant' => 0.9,

        ];
    
        $sitemap = Sitemap::create();
    
        foreach ($routes as $route => $priority) {
            $sitemap->add(
                Url::create("{$base_url}{$route}") // Include the base URL
                    ->setPriority($priority)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        }
    
        $sitemap->writeToFile(public_path('sitemap.xml'));
    
        $this->info('Sitemap generated successfully!');
    }

}
