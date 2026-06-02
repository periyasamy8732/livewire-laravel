<?php // resources/views/components/post/⚡create.blade.php

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use App\Models\Post;

new class extends Component {

    public PostForm $form;

    public function save()
    {
        $this->form->validate();

        Post::create(
            $this->form->only(['title', 'content'])
        );

        return $this->redirect('/post/create');
    }
};
?>
<div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">
    <h1 class="text-2xl font-bold text-blue-600 mb-4">
        Create Post
    </h1>

    <input 
        type="text" 
        wire:model="title"
        class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500"
        placeholder="Enter title"
    >

    <button 
        wire:click="save"
        class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700"
    >
        Save
    </button>
</div>
