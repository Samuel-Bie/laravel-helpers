<?php
namespace Samuelbie\Helpers;

use Illuminate\Support\ServiceProvider;
use Samuelbie\Helpers\Console\TraitCommand;

class HelpersServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerCommands();
    }

    public function register()
    {

    }

    private function registerCommands()
    {
        $this->commands(TraitCommand::class);
    }
}
