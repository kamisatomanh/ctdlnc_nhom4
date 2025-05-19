<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Services\RedBlackTree\RedBlackTree;

class TopPostByRank extends Component
{
    public $rank = 1;
    public $topPost = null;

    public function search()
    {
        $tree = new RedBlackTree();
        $posts = Post::all();

        foreach ($posts as $post) {
            $tree->insert($post);
        }

        $this->topPost = $tree->getPostAtRank((int)$this->rank);
    }

    public function render()
    {
        return view('livewire.top-post-by-rank');
    }
}
