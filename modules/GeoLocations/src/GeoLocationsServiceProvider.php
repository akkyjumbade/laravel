<?php
namespace Modules\GeoLocations;

use Illuminate\Support\ServiceProvider;

class GeoLocationsServiceProvider extends ServiceProvider {
   function boot() {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
      $this->mergeConfigFrom(__DIR__.'/config/config.php', 'geo');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');
      $this->loadMigrationsFrom(__DIR__.'/database/views');

      $this->publishes([
         __DIR__.'/config/config.php' => config_path('geo.php'),
      ]);

      // add the commands
      if ($this->app->runningInConsole()) {
         $this->commands(config('options.commands'));
      }

   }
   function register() {

   }
}
