<?php

namespace SANMV\Saas;

use SANMV\Saas\Commands\SaasCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SaasServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-saas')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-saas_table')
            ->hasCommand(SaasCommand::class);
    }
}
