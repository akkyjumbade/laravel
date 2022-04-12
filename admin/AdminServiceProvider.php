<?php
namespace Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {
   function boot() {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
      $this->mergeConfigFrom(__DIR__.'/config/admin.php', 'admin');
      $this->mergeConfigFrom(__DIR__.'/config/menus.php', 'menus');
      $this->loadViewsFrom(__DIR__.'/views', 'admin');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');
      // $this->loadMigrationsFrom(__DIR__.'/database/views');
      // $this->loadMigrationsFrom(__DIR__.'/database/functions');
      // $this->loadMigrationsFrom(__DIR__.'/database/triggers');

      $this->publishes([
         __DIR__.'/config/admin.php' => config_path('admin.php'),
         __DIR__.'/config/menus.php' => config_path('menus.php'),
         __DIR__.'/../assets' => public_path('vendor/admin'),
      ]);

      // add the commands
      if ($this->app->runningInConsole() && config('admin.commands')) {
         $this->commands(config('admin.commands'));
      }

   }

   function register() {

   }
}
