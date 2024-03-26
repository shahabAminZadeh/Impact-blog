<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register');
    }
    public $data=
        [
            'name'=>"",
            'email'=>"",
            'password'=>"",
            'password_confirmation'=>"",
        ];
    public function register()
    {
        $this->validate([
            'data.name'=>'required|string',
            'data.email'=>'required|unique:users,email',
            'data.password'=>'required|string|min:6|confirmed',
        ]);
        $user=new User();
        $user->name=$this->data['name'];
        $user->email=$this->data['email'];
        $user->password=Hash::make($this->data['password']);
        $user->save();
        $id=$user->id;
        Auth::loginUsingId($id);
        return redirect()->to('/');
    }
}
