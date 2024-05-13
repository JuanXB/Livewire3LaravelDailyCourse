<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;


class CreatePost extends Component
{
    public PostForm $postForm;

    public bool $success = false;

    #[Title('Create Post')] 
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

    public function validateTitle(): void
    {
        $this->validateOnly('postForm.title');
    }

    public function updated($property): void
    {
        if ($property == 'postForm.title') {
            $this->postForm->title = Str::headline($this->postForm->title);
        }
    }

}
