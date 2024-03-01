<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Title Post')]


class Index extends Component
{
    public function render()
    {

        $post = Post::query()->latest()->get();

        return view('livewire.posts.index', ['posts' => $post]);
    }
}
