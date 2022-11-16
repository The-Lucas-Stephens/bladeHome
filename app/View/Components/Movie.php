<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Movie extends Component
{
    //created attribute to pass to the component 
   public $tag;
   public $controllerMovies;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tag,$controllerMovies)
    {
        $this->tag = $tag;
        $this->controllerMovies = $controllerMovies;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie');
    }
}
