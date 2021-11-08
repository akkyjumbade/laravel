<?php

namespace App\Console\Commands;

use App\Models\Role;
use Database\Seeders\GeoLocationsSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Modules\LaravelPreset\Database\Seeders\GeoCitiesTableSeeder;
use Modules\LaravelPreset\Database\Seeders\GeoCountriesTableSeeder;
use Modules\LaravelPreset\Database\Seeders\GeoProvincesTableSeeder;

class CreateRoleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create role command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       $code = $this->ask('Codename of the role?');
       $code = strtolower(trim($code));
       try {
          Role::updateOrCreate([
             'code' => $code
          ], [
             'title' => $code,
             'code' => $code,
             'description' => $code,
          ]);
       } catch (\Throwable $th) {
          throw $th;
       }
       return 0;
    }
}
