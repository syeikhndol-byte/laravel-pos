<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule(['required'])]
    public string $email ='';

    #[Rule(['required'])]
    public string $password ='';

    public function authentificationz()
    {
        if (Auth::attempt($this->validate()))
        {
            toastr()
            ->closeOnHover(true)
            ->closeDuration(10)
            ->timeOut(1000)
            ->addSuccess('Login Berhasil.');
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email'=> __('Wrong Email'),
        ]);
    }
}