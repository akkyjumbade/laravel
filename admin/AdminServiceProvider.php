<?php
namespace Admin;


use Admin\Components\Admin as AdminLayout;
use Admin\Components\AdminForm;
use Admin\Components\Button;
use Admin\Components\Checkbox;
use Admin\Components\Header;
use Admin\Components\Notice;
use Admin\Components\ResourceHeader;
use Admin\Components\Settings;
use Admin\Components\Sidebar;
use Admin\Components\Storage;
use Admin\Components\StorageItem;
use Admin\Components\Table;
use Admin\Components\TextInput;
use Admin\Components\PasswordInput;
use Admin\Components\Toggle;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AdminServiceProvider extends ServiceProvider {
   function boot() {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
      $this->mergeConfigFrom(__DIR__.'/config/admin.php', 'admin');
      $this->loadViewsFrom(__DIR__.'/views', 'admin');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');
      $this->publishes([
         __DIR__.'/config/admin.php' => config_path('admin.php'),
      ]);
      $this->publishes([
         __DIR__.'/../assets' => public_path('assets/admin'),
      ], 'admin-setup');

      Blade::component('admin', AdminLayout::class);
      Blade::component('admin-sidebar', Sidebar::class);
      Blade::component('admin-header', Header::class);
      Blade::component('admin-table', Table::class);
      Blade::component('admin-resource-header', ResourceHeader::class);
      Blade::component('admin-notice', Notice::class);
      Blade::component('admin-settings', Settings::class);
      Blade::component('admin-form', AdminForm::class);
      Blade::component('admin-text-input', TextInput::class);
      Blade::component('admin-password-input', PasswordInput::class);
      Blade::component('admin-storage', Storage::class);
      Blade::component('admin-checkbox', Checkbox::class);
      Blade::component('admin-storage-item', StorageItem::class);
      Blade::component('admin-button', Button::class);
      Blade::component('admin-toggle', Toggle::class);


      // add the commands
      if ($this->app->runningInConsole() && config('admin.commands')) {
         $this->commands(config('admin.commands'));
      }

      Blade::if('role', function (array $value = []) {
         $roleCode = auth()->user()->role->code;
         return in_array($roleCode, $value);
      });
      Blade::if('permission', function (array $value = []) {
         $roleCode = auth()->user()->role->permissions()->pluck('id', 'code');
         return in_array($roleCode, $value);
      });
      // $this->loadViewComponentsAs('admin', config('admin.blade_components', []));

   }
   function register() {

   }
}
