<?php

namespace Almatari1\TestPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Almatari1\TestPackage\Commands\TestPackageCommand;

class TestPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('test-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_test-package_table')
            ->hasCommand(TestPackageCommand::class);
    }
}
