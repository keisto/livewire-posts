<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    protected $listeners = [
        'postCreated' => 'handlePostCreated'
    ];

    public function handlePostCreated($id)
    {
        session()->flash('message', 'Your post has been created.');
    }

    public function render()
    {
        return view('livewire.post-index', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }
}
