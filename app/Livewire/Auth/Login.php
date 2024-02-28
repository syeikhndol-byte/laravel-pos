<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class Login extends Component
{
    #[\Livewire\Attributes\Layout('layouts.guest')]

    public LoginForm $form;

    public function login()
    {
        $this->form->authentificationz();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}