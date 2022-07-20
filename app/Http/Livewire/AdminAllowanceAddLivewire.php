<?php

namespace App\Http\Livewire;
use App\Models\Allowance;
use Livewire\Component;

class AdminAllowanceAddLivewire extends Component
{

    public $user_id,$allowance_name,$allowance_details,$allowance_type,$amount,$total,$issued_salary_id,$issue_date;


    public function save(){
        $allowance = new Allowance();
        $allowance->user_id = $this->user_id;
        $allowance->allowance_name = $this->allowance_name;
        $allowance->allowance_details = $this->allowance_details;
        $allowance->allowance_type = $this->allowance_type;
        $allowance->amount = $this->amount;
        $allowance->total = $this->total;
        $allowance->issued_salary_id = $this->issued_salary_id;
        $allowance->issue_date = $this->issue_date;


        $allowance->save();

        return redirect(route('admin.allowance'));
    }

    public function render()
    {
        return view('livewire.admin-allowance-add-livewire');
    }
}
