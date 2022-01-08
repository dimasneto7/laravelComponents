<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Identificacao extends Component
{
    public $nome;
    public $nacionalidade;
    public $data_nascimento;

    public function __construct($nome, $nacionalidade, $dataNascimento)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->data_nascimento = $dataNascimento;
    }

    public function render()
    {
        return view('components.identificacao');
    }
}
