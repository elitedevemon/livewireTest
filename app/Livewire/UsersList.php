<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
  public $users;
  public $name;
  public function mount()
  {
    $this->users = User::all();
    $this->name = $this->users->first()->name;
  }
  public function render()
  {
    return view('livewire.users-list');
  }
}
