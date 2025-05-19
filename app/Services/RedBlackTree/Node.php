<?php

namespace App\Services\RedBlackTree;

class Node
{
    public $post;
    public $score;
    public $color;
    public $left;
    public $right;
    public $parent;
    public $size = 1;

    public function __construct($post)
    {
        $this->post = $post;
        $this->score = $post->score;
        $this->color = 'red';
        $this->left = null;
        $this->right = null;
        $this->parent = null;
    }

    public function isRed()
    {
        return $this->color === 'red';
    }

    public function updateSize()
    {
        $leftSize = $this->left ? $this->left->size : 0;
        $rightSize = $this->right ? $this->right->size : 0;
        $this->size = 1 + $leftSize + $rightSize;
    }
}
