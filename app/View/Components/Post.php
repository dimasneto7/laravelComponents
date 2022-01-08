<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{

    public $post;

    public function __construct($dados)
    {
        $this->post = $dados;
    }

    public function render()
    {
        return view('components.post');
    }
}
