<?php

namespace App\View\Components\Users;

use Illuminate\View\Component;

class Posts extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.users.posts');
    }
}
