<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public $title = "User Details";
    public $name, $email;

    public function updateName()
    {
        
    }
    public function mount(User $user)
    {
        $this->fill([
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public function render()
    {
        return view('livewire.show-user');
    }
}
