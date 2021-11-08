<?php

namespace Admin\Components;

use Illuminate\View\Component;

class Table extends Component
{
   public $actions;
   public $columns;
   public $rows;
   /**
    * Create a new component instance.
    *
    * @return void
    */
   public function __construct($columns = [], $rows = [])
   {
      $this->columns = $columns;
      $this->rows = $rows;
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
      return view('admin::components.table');
   }
}
