<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Title Post')]


class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index');
    }
}