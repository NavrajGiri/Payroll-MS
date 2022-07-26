<?php

namespace App\Http\Livewire;
use App\Models\Rank;
use Livewire\Component;

class AdminRankEditLivewire extends Component
{
    public $rank_id, $name;

     function mount ($rank_id){
        $this->rank = $rank_id;
        $rank = Rank::find($this->rank_id);
        $this->name = $rank->name;
    }

     function save(){
        $rank = Rank::find($this->rank_id);
        $rank->name = $this->name;
        $rank->save();

        return redirect(route('admin.rank'));
    }

    public function render()
    {
        return view('livewire.admin-rank-edit-livewire');
    }
}
