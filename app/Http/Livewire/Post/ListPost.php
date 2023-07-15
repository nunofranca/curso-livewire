<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $posts;

    public function mount(Post $post)
    {
        $this->posts = $post->get();
    }

    public function render()
    {
        return view('livewire.post.list-post');
    }
}
