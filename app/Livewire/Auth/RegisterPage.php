<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register')]

class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;

    public function save(){
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        // save to database
        $user = User::create([
           'name' => $this->name,
           'email' => $this->email,
           'password' => Hash::make($this->password)
        ]);

        //login
        // auth()->login($user);

        //redirect
        // return redirect()->intended();
        // Redirection vers la page de connexion avec un message de succès
        session()->flash('success', 'Votre compte a été créé avec succès. Veuillez vous connecter.');
        return redirect()->route('login');
    }



    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
