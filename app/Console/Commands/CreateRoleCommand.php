<?php

namespace App\Console\Commands;

use App\Models\Role;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

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
      $code = $this->ask('Name of the role?');
      $code = strtolower(trim($code));
      if (!$code || $code == 'root') {
         throw new Exception("You can't create with name root");
      }
      $title = Str::title($code);
      $code = Str::slug($code);
      try {
         Role::updateOrCreate([
            'code' => $code
         ], [
            'title' => $title,
            'code' => $code,
         ]);
      } catch (\Throwable $th) {
         throw $th;
      }
      return 0;
   }
}
