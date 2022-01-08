<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{

    public $entrada;

    public function __construct($post)
    {
        $this->entrada = $post;
    }

    public function render()
    {
        return view('components.post');
    }
}
