<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUserLivewire extends Component
{
    public $keyword;

    public function render()
    {
        $all_users = User::when($this->keyword,function($q){
                                return $q->where('name','like','%'.$this->keyword.'%')
                                        ->orWhere('email','like','%'.$this->keyword.'%')
                                        ->orWhere('phone_no','like','%'.$this->keyword.'%')
                                        ->orWhere('computer_no','like','%'.$this->keyword.'%');

                            })->get();
        return view('livewire.admin-user-livewire',['all_users'=>$all_users]);
    }
}
