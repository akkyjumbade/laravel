<?php

namespace Admin\Components;

use Illuminate\View\Component;

class AdminForm extends Component
{
   public $path;
   public $method;
   /**
    * Create a new component instance.
    *
    * @return void
    */
   public function __construct($path, $method = 'POST')
   {
      $this->path = $path;
      $this->method = $method;
   }

   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */
   public function render()
   {
      return view('admin::components.form');
   }
}
