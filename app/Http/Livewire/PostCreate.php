<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostCreate extends Component
{
    public $body;

    public function create()
    {
        $this->validate([
            'body' => 'required|min:2'
        ]);

        $post = auth()->user()->posts()->create([
            'body' => $this->body
        ]);

        $this->emit('postCreated', $post->id);

        $this->body = '';
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
