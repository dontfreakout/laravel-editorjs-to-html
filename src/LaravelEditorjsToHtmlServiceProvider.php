<?php

namespace Dontfreakout\LaravelEditorjsToHtml;

use Dontfreakout\LaravelEditorjsToHtml\Commands\LaravelEditorjsToHtmlCommand;
use Dontfreakout\LaravelEditorjsToHtml\Components\EditorToHtml;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelEditorjsToHtmlServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-editorjs-to-html')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponent('dfk', EditorToHtml::class)
            ->hasCommand(LaravelEditorjsToHtmlCommand::class);
    }
}
