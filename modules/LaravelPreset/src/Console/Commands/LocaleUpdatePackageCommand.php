<?php

namespace Modules\LaravelPreset\Console\Commands;

use Illuminate\Console\Command;

class LocaleUpdatePackageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'locale:update {--lang=en}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the locale and language packages';

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
         $lang = trim($this->option('lang'));
         try {
          $this->downloadAndGetContentFromRepo($lang);
         } catch (\Throwable $th) {
          throw $th;
         }
         return 0;
    }
    function downloadAndGetContentFromRepo($langCode = 'en') {
       $url = "https://raw.githubusercontent.com/Typed-Systems/locale/main/languages/$langCode/index.json";
       try {
          $res = file_get_contents($url);
          $fileToUpdate = resource_path("lang/$langCode.json");
          file_put_contents($fileToUpdate, $res);
       } catch (\Throwable $th) {
          \Log::error($th);
          throw $th;
       }
    }
}
