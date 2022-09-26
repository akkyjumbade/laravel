<?php

namespace Admin\Console\Commands;

use Admin\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminCreateCommand extends Command
{
   /**
    * The name and signature of the console command.
    *
    * @var string
    */
   protected $signature = 'admin:create';

   /**
    * The console command description.
    *
    * @var string
    */
   protected $description = 'Command description';

   /**
    * Execute the console command.
    *
    * @return int
    */
   public function handle()
   {
      $username = $this->ask('Username');
      $email = $this->ask('E-mail');
      $password = $this->ask('Password');
      $role = $this->choice('Role', Role::get(['code', 'id'])->pluck('code', 'id')->toArray());
      try {
         $roleId = Role::where('code', $role)->value('id');
         $user = $this->createAdmin($username, $email, $password, $roleId);
         $this->info("Admin user created: {$user->name}");
      } catch (\Throwable $e) {
         $this->error($e->getMessage());
      }
      return 0;
   }

   /**
    * Create a new command instance.
    *
    * @return void
    */
   public function __construct()
   {
      parent::__construct();
   }

   function createAdmin($username, $email, $password, $roleId)
   {
      $ruler = Validator::make([
         'username' => $username,
         'password' => $password,
         'email' => $email,
      ], [
         'username' => ['required', 'string', 'max:100', 'unique:users'],
         'email' => ['required', 'string', 'max:200', 'unique:users'],
      ]);
      if ($ruler->fails()) {
         foreach ($ruler->errors()->toArray() as $key => $value) {
            $this->warn($key .': '. implode(', ', $value));
         }
         throw new \Exception("Please all fields");
      }

      try {
         DB::beginTransaction();
         tap(User::create([
            'username' => $username,
            'password' => bcrypt($password),
            'email' => $email,
            // 'email' => $email,
         ]), function($user) use ($roleId) {
            //dump($user->roles, $roleId);
            $user->roles()->attach($roleId);
         });
         DB::commit();
      } catch (\Throwable $th) {
         throw $th;
      }
      return 0;
   }
}
