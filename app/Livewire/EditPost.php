<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class EditPost extends Component
{

    public PostForm $postForm;

    public bool $success = false;
    public function mount(Post $post) :void
    {
        $this->postForm->setPost($post);
    }

    public function render(): View
    {
        return view('livewire.edit-post');
    }

    public function update(): void
    {
        $this->validate();

        $this->postForm->update();

        $this->success = true;
    }
}
