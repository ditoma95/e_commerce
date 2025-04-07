<?php

namespace App\Livewire\Auth;

use Livewire\Component;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

#[Title('Reset Password')]

class ResetPasswordPage extends Component
{
    #[Url]
    public $token; // Le jeton de réinitialisation passé dans l'URL
    public $email; // L'e-mail de l'utilisateur
    public $password; // Le nouveau mot de passe
    public $password_confirmation; // La confirmation du nouveau mot de passe

    // Méthode exécutée lors du chargement du composant
    public function mount($token)
    {
        $this->token = $token;
        // Optionnel : Récupérer l'e-mail depuis l'URL si nécessaire
        $this->email = request()->query('email');
    }

    // Méthode pour réinitialiser le mot de passe
    public function save()
    {
        // Validation des champs
        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Réinitialisation du mot de passe
        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function (User $user, string $password) {
                // Mise à jour du mot de passe de l'utilisateur
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->setRememberToken(Str::random(60));

                $user->save();

                // Déclencher l'événement de réinitialisation du mot de passe
                event(new PasswordReset($user));
            }
        );

        // Gestion de la réponse
        if ($status === Password::PASSWORD_RESET) {
            // Redirection vers la page de connexion avec un message de succès
            return redirect()->route('login')->with('success', 'Votre mot de passe a été réinitialisé avec succès. Veuillez vous connecter.');
        } else {
            // Affichage d'un message d'erreur en cas d'échec
            session()->flash('error', 'Une erreur s\'est produite, veuillez réessayer.');
            return back();
        }
    }
    public function render()
    {
        return view('livewire.auth.reset-password-page');
    }
}
