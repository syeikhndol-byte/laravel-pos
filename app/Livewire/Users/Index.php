<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Users')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.users.index');
    }
}