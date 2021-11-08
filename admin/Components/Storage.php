<?php

namespace Admin\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Storage extends Component
{
   public $drives;
   public $recentItems;
   /**
    * Create a new component instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->drives = config('filesystems.disks');
      $recentItems = DB::table('files')->get();
      $this->recentItems = $recentItems;
   }

   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */
   public function render()
   {
      return view('admin::components.storage.index');
   }
}
