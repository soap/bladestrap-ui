<?php

namespace Soap\BladestrapUi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\BladestrapUi\Commands\BladestrapUiCommand;

class BladestrapUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bladestrap-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_bladestrap-ui_table')
            ->hasCommand(BladestrapUiCommand::class);
    }
}
