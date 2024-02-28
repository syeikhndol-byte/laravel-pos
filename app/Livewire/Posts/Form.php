<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Form extends Component
{
    public PostForm $form;
    public function save():void
    {
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.posts.form');
    }
}
