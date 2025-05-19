<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;   
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class PostCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $img;
    public $score;

    public function submit()
    {
        
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'score' => 'nullable|integer',
        ]);
        
        if (!Auth::check()) {
            session()->flash('error', 'Bạn cần đăng nhập để đăng bài!');
            return;
        }
        $imagePath = $this->img ? $this->img->store('public/images') : null;
        $imagePath = $imagePath ? str_replace('public/', 'storage/', $imagePath) : null;
        Post::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'content' => $this->content,
            'img' => $imagePath,    
            'score' => $this->score ?? 0,
        ]);

        session()->flash('message', 'Bài viết đã được đăng thành công!');

        // Reset form
        $this->reset(['title', 'content', 'img', 'score']);
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}