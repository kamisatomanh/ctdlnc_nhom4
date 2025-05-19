<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class PostSingle extends Component
{
    public $post;
    public $user;

    public function mount($id)
    {
        $this->post = Post::find($id);
        $this->user = User::find($this->post->user_id);
    }
    public function render()
    {
        return view('livewire.post.post-single');
    }
}
