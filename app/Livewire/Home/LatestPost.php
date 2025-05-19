<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Post;
use App\Models\File;

class LatestPost extends Component
{
    public $posts;
    public function mount(){
        $this->posts = Post::with('files')->latest()->take(2)->get();
    }
    public function render()
    {
        return view('livewire.home.latest-post');
    }
}
