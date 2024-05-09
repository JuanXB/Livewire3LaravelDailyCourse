<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $postForm;

    public bool $success = false;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(): void
    {

        $this->validate();

        $this->postForm->save();

        $this->success = true;

    }

}
