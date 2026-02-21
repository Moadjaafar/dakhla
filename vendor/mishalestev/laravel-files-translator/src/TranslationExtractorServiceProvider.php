<?php

namespace TranslationExtractor;

use Illuminate\Support\ServiceProvider;

class TranslationExtractorServiceProvider extends ServiceProvider
{
    public function boot() {}

    /**
     * Register application services.
     *
     * @return void
     */
    public function register()
    {
        // Register the command
        $this->commands([
            Commands\ExtractTranslations::class,
        ]);
    }
}
