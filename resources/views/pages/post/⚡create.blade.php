
<div class="max-w-md mx-auto mt-10 bg-blue-100 shadow-lg rounded-xl p-6">
    <h1 class="text-2xl font-bold text-blue-600 mb-4">
        Create Post
    </h1>

<form wire:submit="save" class="container mt-5 d-flex flex-column gap-2">

    <div class="form-group ">
        <input type="text" wire:model="form.title" class="form-control " placeholder="enter title">
        @error('form.title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <input type="text" wire:model="form.content" class="form-control" placeholder="enter content">
        @error('form.content') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary align-self-center">
        Save
    </button>
<table class="table mt-5">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <button wire:click="destroy({{ $post->id }})" class="btn btn-danger">
                    Delete
                </button>
        </tr>
        @endforeach
    </tbody>
</table>

</form>


