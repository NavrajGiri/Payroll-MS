<?php

namespace App\Http\Livewire;

use App\Models\Rank;
use Livewire\Component;

class AdminRankAddLivewire extends Component
{
    public $name;

    public function save(){
        $rank = new Rank();
        $rank->name = $this->name;
        $rank->save();

        return redirect(route('admin.rank'));
    }

    public function render()
    {
        return view('livewire.admin-rank-add-livewire');
    }
}
