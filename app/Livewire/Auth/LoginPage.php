<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class LoginPage extends Component
{
    public $email;
    public $password;

    public function save()
    {
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:6|max:255',
        ]);

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'Invalid credentials');
            return;
        }

        return redirect('/'); 
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}







// return redirect()->intended();
// redirect()->intended() veut dire :

// Redirige vers la page où l'utilisateur voulait aller avant de tomber sur le login.