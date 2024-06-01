<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::where('role', 'admin')->get();
        return view('admin.users.index')->layout('components.layouts.admin');
    }
}
