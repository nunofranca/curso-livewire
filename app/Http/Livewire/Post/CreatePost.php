<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public string $title;
    public string $subtitle;

    public string $text;


    public function save()
    {
        Post::create([
            'title'=> $this->title,
            'subtitle'=> $this->subtitle,
            'text'=> $this->text
        ]);
        $this->redirectRoute('panel.posts.list');
    }
    public function render()
    {
        return view('livewire.post.create-post');
    }
}
