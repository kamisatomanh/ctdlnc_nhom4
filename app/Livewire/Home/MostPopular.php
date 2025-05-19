<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Post;
use App\Services\RedBlackTree\RedBlackTree;

class MostPopular extends Component
{
    public $rankedPosts = [];
    

    public function mount(){
        $posts = Post::all();
        $tree = new RedBlackTree();

        foreach ($posts as $post) {
            $tree->insert($post);
        }

        
        $this->rankedPosts = $tree->getRankedPosts();
    }
    public function render()
    {
        return view('livewire.home.most-popular');
    }
}
