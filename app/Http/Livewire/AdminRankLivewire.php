<?php

namespace App\Http\Livewire;
use App\Models\Rank;

use Livewire\Component;

class AdminRankLivewire extends Component
{
    public function render()
    {
        $all_rank = Rank::all();
        return view('livewire.admin-rank-livewire',['all_rank'=>$all_rank]);
    }
}
