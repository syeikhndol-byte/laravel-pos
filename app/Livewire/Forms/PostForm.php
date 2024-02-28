<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required'])]
    public string $title = '';

    #[Rule(['required'])]
    public string $content = '';

    public function store():void
    {

        Auth::user()->posts()->create(
            $this->validate()
        );

        toastr()
        ->closeOnHover(true)
        ->closeDuration(20)
        ->addSuccess('Data berhasil disimpan.');

        $this->reset();
    }
}