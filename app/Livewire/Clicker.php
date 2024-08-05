<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{

    public $count = 1;

    public function add()
    {
        $this->count++;
    }
    public function reduce()
    {
        if ($this->count !== 0) {
            $this->count--;
        };
    }
    public function render()
    {
        return view('livewire.clicker', ["count" => $this->count]);
    }
}
