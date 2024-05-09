<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PostForm extends Form
{
    #[Validate('required|min:5')]
    public string $title = '';

    #[Validate('required|min:5')]
    public string $body = '';

    public function save(): void 
    {
        Post::create($this->all());
 
        $this->reset('title', 'body');
    } 
}
