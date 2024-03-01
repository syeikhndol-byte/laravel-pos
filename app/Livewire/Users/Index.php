<?php

namespace App\Livewire\Users;

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Users')]
class Index extends Component
{
    public function render()
    {
        $users = User::query()->latest()->get();
        return view('livewire.users.index',['users' => $users]);
    }
}