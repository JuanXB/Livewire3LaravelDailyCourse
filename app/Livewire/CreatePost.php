<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public string $title = '';

    public string $body = '';

    public function render()
    {
        return view('livewire.create-post');
    }
}
