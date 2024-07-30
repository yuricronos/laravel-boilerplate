<?php

namespace App\Livewire\User;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateUser extends Component
{

    use PasswordValidationRules;

    public $form = [
        'name' => "",
        'username' => "",
        'email' => "",
        'password' => "",
        'password_confirmation' => ""
    ];
    public $modal = "";

    public function render()
    {
        return view('livewire.user.create-user', ['form' => $this->form]);
    }

    public function createUser()
    {
        Validator::make($this->form, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:5', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => $this->passwordRules()
        ])->validate();

        $user = User::create([
            'name' => $this->form['name'],
            'username' => $this->form['username'],
            'email' => $this->form['email'],
            'password' => Hash::make($this->form['password']),
        ]);

        if ($user) {
            $this->clearForm();
            $this->dispatch('hideModal', $this->modal);
            $this->dispatch('SwalConfirmed', ['text' => sprintf("new user has been added")]);
            $this->dispatch('refresh-manager-user-lists');
            return;
        }
        $this->dispatch('SwalConfirmed', ['icon' => "error", 'text' => sprintf("can't save user")]);
    }

    private function clearForm()
    {
        foreach ($this->form as $k => $v) {
            $this->form[$k] = "";
        }
    }
}
