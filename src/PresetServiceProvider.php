<?php

namespace Nevoxx\FrontendPresetBulma;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class PresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('bulma', function ($command) {
            BulmaPreset::install(false);
            $command->info('Bulma frontend preset was successfully installed.');
            $command->comment('Run "npm install && npm run dev" to rebuild your assets.');
        });

        PresetCommand::macro('bulma-auth', function ($command) {
            BulmaPreset::install(true);
            $command->info('Bulma frontend preset with auth was successfully installed.');
            $command->comment('Run "npm install && npm run dev" to rebuild your assets.');
        });
    }
}