<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Livewire\Forms\PostForm;

class PostCreate extends Component
{
    public PostForm $form;
    public $posts = [];

    public function mount()
    {
        $this->loadPosts();
    }

    public function save()
    {
        $this->form->validate();

        Post::create(
            $this->form->only(['title', 'content'])
        );

        $this->form->reset();

        $this->loadPosts();
    }

    public function loadPosts()
    {
        $this->posts = Post::latest()->get();
    }

    public function destroy($id)
    {
        Post::find($id)?->delete();

        $this->loadPosts();
    }

    public function render()
    {
        return view('post.create');
    }
}