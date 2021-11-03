<?php

namespace Admin\Components;

use Illuminate\View\Component;

class Settings extends Component
{
   public $actions;
   public $columns;
   public $rows;
   public $options;

   /**
    * Create a new component instance.
    *
    * @return void
    */
   public function __construct($columns = [], $rows = [], $options = null)
   {
      $this->columns = $columns;
      $this->rows = $rows;
      $this->options = $options;


      $this->actions = [
         [

         ]
      ];
   }

   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */
   public function render()
   {
      return view('admin::components.settings.index');
   }
}
