<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        session()->invalidate(); // Xóa session
        session()->regenerateToken(); // Tạo lại CSRF token

        return redirect('/login'); // Điều hướng về trang login
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
