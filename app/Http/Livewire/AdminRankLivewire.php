<?php

namespace App\Http\Livewire;
use App\Models\Ranks;

use Livewire\Component;

class AdminRankLivewire extends Component
{
    public function render()
    {
        $all_ranks = Ranks::all();
        return view('livewire.admin-ranks-livewire',['all_ranks'=>$all_ranks]);
    }
}
