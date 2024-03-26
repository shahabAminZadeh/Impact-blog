<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }
    public $data=
        [

            'email'=>"",
            'password'=>"",
        ];
    public function login()
    {
        $this->validate([
            'data.email'=>'required|email',
            'data.password'=>'required|string|min:6',
        ]);
        if (Auth::attempt([
            'email'=>$this->data['email'],
            'password'=>$this->data['password'],
        ]))
        return redirect()->to('/');
    }
}
