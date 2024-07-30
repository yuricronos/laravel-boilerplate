<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class ManageUserLists extends Component
{

    protected $listeners = ['refresh-manager-user-lists' => '$refresh'];

    public array $roles = [
        0 => 'Administrator',
        1 => 'User'
    ];

    public function render()
    {
        return view('livewire.user.manage-user-lists', [
            'userLists' => json_decode(json_encode(User::get()))
        ]);
    }

    public function cancelUser($id)
    {
        User::where('id', $id)->update(['email_verified_at' => null]);
        // $this->dispatch('toast', ['type' => "error", 'message' => sprintf("%s user is deactivated", $this->getUser($id)->username)]);
        $this->dispatch('SwalConfirmed', ['text' => sprintf("%s is deactivated", $this->getUser($id)->username)]);
    }

    public function activateUser($id)
    {
        User::where('id', $id)->update(['email_verified_at' => now()]);
        // $this->dispatch('toast', ['type' => "success", 'message' => sprintf("%s user is activated", $this->getUser($id)->username)]);
        $this->dispatch('SwalConfirmed', ['text' => sprintf("%s is activated", $this->getUser($id)->username)]);
    }

    public function deleteUser($id)
    {
        $username = $this->getUser($id)->username;
        User::where('id', $id)->delete();
        // $this->dispatch('toast', ['type' => "success", 'message' => sprintf("%s is deleted", $username)]);
        $this->dispatch('SwalConfirmed', ['text' => sprintf("%s is deleted", $username)]);
    }

    private function getUser($id)
    {
        return User::find($id);
    }
}
