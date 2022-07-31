<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class ListEmployees extends Component
{
    public function render()
    {
        // $this->employees=User::class::orderBy("nom","asc")->get();
        return view('livewire.list-employees')->layout('layouts.default');
    }
}