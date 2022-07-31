<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ProjetUser extends Component
{
    public function render()
    {
        return view('livewire.user.projet-user')->layout('layouts.default');
    }
}