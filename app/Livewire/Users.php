<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users, $filterName;
    public $isRemovingUser;
    public $userSelected;

    public function render()
    {   
        if (!$this->filterName) {
            $this->users = User::where('role', 'admin')->limit(15)->get();
        } else {
            $this->users = User::WhereRaw("CONCAT(name, ' ', lastname) LIKE ?", ['%'.$this->filterName.'%'])->limit(15)->get();
        }
        return view('admin.users.index')->layout('components.layouts.admin');
    }


    public function removeUser($userId) {
        $this->userSelected = User::find($userId);
        $this->isRemovingUser = true;
    }

    public function confirmRemoveUser() {
        $this->userSelected->delete();
        $this->closeModals();
    }


    public function closeModals() {
        $this->userSelected = null;
        $this->isRemovingUser = false;
    }
}
