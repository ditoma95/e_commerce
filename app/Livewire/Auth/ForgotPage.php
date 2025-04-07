<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Password;

#[Title('Forgot Password')]

class ForgotPage extends Component
{

    public $email;
    public $success = false; // Nouvelle propriété pour suivre l'état de succès

    public function save()
    {
        // Validation de l'e-mail
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
        ]);

        // Envoi du lien de réinitialisation
        $status = Password::sendResetLink(['email' => $this->email]);

        // Gestion de la réponse
        if ($status === Password::RESET_LINK_SENT) {
            $this->success = true; // Marquer comme succès
            $this->reset('email'); // Réinitialiser le champ e-mail
        } else {
            session()->flash('error', 'Une erreur s’est produite. Veuillez réessayer.');
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-page');
    }
}
