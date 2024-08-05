<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $hello = "hello world";
    public function createNewUser()
    {
        User::factory()->create();

    }
    public function render()
    {
        $title = "Test User";

        $users = User::all();

        return view('livewire.clicker', [
            "title" => $title,
            "users" => $users,
        ]);
    }
}
