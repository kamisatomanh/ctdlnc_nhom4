<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $user_name, $account, $email, $password, $password_confirmation;

    protected $rules = [
        'user_name' => 'required|min:3',
        'account' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ];
    
    public function register()
    {
        $this->validate();
        //dd($this->user_name, $this->account, $this->email, $this->password, $this->password_confirmation);
        // Tạo user mới
        $user = User::create([
            'user_name' => $this->user_name,
            'account' => $this->account,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user); // Tự động đăng nhập sau khi đăng ký thành công

        return redirect('/'); // Chuyển hướng về trang chủ
    }

    public function render()
    {
        return view('livewire.register');
    }
}
