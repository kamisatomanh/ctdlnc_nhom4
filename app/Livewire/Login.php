<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $Email;
    public $Password;
    
    public function submit()
    {
       

        if (Auth::attempt(['account' => $this->Email, 'password' => $this->Password])) {
            return redirect()->intended(default: '/');
        } else {
            $this->addError('logerror', 'Thông tin đăng nhập không chính xác');
        }
    }


    public function render()
    {
        return view('livewire.login');
    }
}