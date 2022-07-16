<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUserLivewire extends Component
{
    public function render()
    {
        $all_users = User::all();
        return view('livewire.admin-user-livewire',['all_users'=>$all_users]);
    }
}
