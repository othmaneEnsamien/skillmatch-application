<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ListMyprojects extends Component
{
    public function render()
    {
        return view('livewire.user.list-myprojects')->layout('layouts.default');
    }
}
