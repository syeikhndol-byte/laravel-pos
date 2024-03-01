<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    #[\Livewire\Attributes\Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}