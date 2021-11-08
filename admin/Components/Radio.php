<?php

namespace Admin\Components;

use Illuminate\View\Component;

class Radio extends Component
{
   public $label;
   public $name;
   public $required;
   public $value;
   public $checked;
   public $options;

   /**
    * Create a new component instance.
    *
    * @return void
    */
   public function __construct(string $name, string $label = null, bool $required = false, $value = null, bool $checked = false, array $options = null)
   {
      $this->label = $label;
      $this->name = $name;
      $this->required = $required;
      $this->value = $value;
      $this->checked = $checked;
      $this->options = $options;
   }

   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\Contracts\View\View|\Closure|string
    */
   public function render()
   {
      return view('admin::components.radio');
   }
}
