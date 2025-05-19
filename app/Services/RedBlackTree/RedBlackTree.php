<?php

namespace App\Services\RedBlackTree;

class RedBlackTree
{
    public $root = null;

    public function insert($post)
    {
        $node = new Node($post);
        $this->root = $this->bstInsert($this->root, $node);
        $this->fixViolation($node);
    }

    private function bstInsert($root, $node)
    {
        if ($root === null) return $node;

        if ($node->score < $root->score) {
            $root->left = $this->bstInsert($root->left, $node);
            $root->left->parent = $root;
        } else {
            $root->right = $this->bstInsert($root->right, $node);
            $root->right->parent = $root;
        }

        $root->updateSize();
        return $root;
    }

    private function rotateLeft($node)
    {
        $right = $node->right;
        $node->right = $right->left;

        if ($right->left !== null) {
            $right->left->parent = $node;
        }

        $right->parent = $node->parent;

        if ($node->parent === null) {
            $this->root = $right;
        } elseif ($node === $node->parent->left) {
            $node->parent->left = $right;
        } else {
            $node->parent->right = $right;
        }

        $right->left = $node;
        $node->parent = $right;

        $node->updateSize();
        $right->updateSize();
    }

    private function rotateRight($node)
    {
        $left = $node->left;
        $node->left = $left->right;

        if ($left->right !== null) {
            $left->right->parent = $node;
        }

        $left->parent = $node->parent;

        if ($node->parent === null) {
            $this->root = $left;
        } elseif ($node === $node->parent->left) {
            $node->parent->left = $left;
        } else {
            $node->parent->right = $left;
        }

        $left->right = $node;
        $node->parent = $left;

        $node->updateSize();
        $left->updateSize();
    }

    private function fixViolation($node)
    {
        while ($node !== $this->root && $node->parent->isRed()) {
            $parent = $node->parent;
            $grand = $parent->parent;

            if ($parent === $grand->left) {
                $uncle = $grand->right;

                if ($uncle !== null && $uncle->isRed()) {
                    $parent->color = 'black';
                    $uncle->color = 'black';
                    $grand->color = 'red';
                    $node = $grand;
                } else {
                    if ($node === $parent->right) {
                        $node = $parent;
                        $this->rotateLeft($node);
                    }
                    $parent->color = 'black';
                    $grand->color = 'red';
                    $this->rotateRight($grand);
                }
            } else {
                $uncle = $grand->left;

                if ($uncle !== null && $uncle->isRed()) {
                    $parent->color = 'black';
                    $uncle->color = 'black';
                    $grand->color = 'red';
                    $node = $grand;
                } else {
                    if ($node === $parent->left) {
                        $node = $parent;
                        $this->rotateRight($node);
                    }
                    $parent->color = 'black';
                    $grand->color = 'red';
                    $this->rotateLeft($grand);
                }
            }
        }

        $this->root->color = 'black';
    }

    public function getPostAtRank($rank)
    {
        return $this->getAtRank($this->root, $rank);
    }

    private function getAtRank($node, $rank)
    {
        if ($node === null) return null;

        $rightSize = $node->right ? $node->right->size : 0;

        if ($rank <= $rightSize) {
            return $this->getAtRank($node->right, $rank);
        } elseif ($rank === $rightSize + 1) {
            return $node->post;
        } else {
            return $this->getAtRank($node->left, $rank - $rightSize - 1);
        }
    }

    public function getRankedPosts()
    {
        $result = [];
        $this->inOrder($this->root, $result);
        return array_reverse($result);
    }

    private function inOrder($node, &$result)
    {
        if ($node === null) return;
        $this->inOrder($node->left, $result);
        $result[] = $node->post;
        $this->inOrder($node->right, $result);
    }

    public function updatePostScore($updatedPost)
    {
        $this->deletePost($updatedPost->id);
        $this->insert($updatedPost);
    }

    public function deletePost($postId)
    {
        $this->root = $this->deleteById($this->root, $postId);
    }

    private function deleteById($node, $postId)
    {
        if ($node === null) return null;

        if ($postId < $node->post->id) {
            $node->left = $this->deleteById($node->left, $postId);
        } elseif ($postId > $node->post->id) {
            $node->right = $this->deleteById($node->right, $postId);
        } else {
            // Node cần xoá
            if ($node->left === null) return $node->right;
            if ($node->right === null) return $node->left;

            // Có 2 con: tìm node kế tiếp
            $successor = $this->minValueNode($node->right);
            $node->post = $successor->post;
            $node->score = $successor->score;
            $node->right = $this->deleteById($node->right, $successor->post->id);
        }

        $node->updateSize();
        return $node;
    }

    private function minValueNode($node)
    {
        $current = $node;
        while ($current->left !== null) {
            $current = $current->left;
        }
        return $current;
    }
}
