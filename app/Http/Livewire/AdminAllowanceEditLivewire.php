<?php

namespace App\Http\Livewire;
use App\Models\Allowance;

use Livewire\Component;

class AdminAllowanceEditLivewire extends Component
{
    public $user_id,$allowance_name,$allowance_details,$allowance_type,$amount,$total,$issue_salary_id,$issue_date,$issue_by;
public function mount($user_id){
    $this->user_id = $user_id;
    $allowance = Allowance::find($user_id);
    $this->$allowance_name = $allowance->allowance_name;
    $this->$allowance_details = $allowance->allowance_details;
    $this->$allowance_type = $allowance->allowance_type;
    $this->$amount = $allowance->amount;
    $this->$total = $allowance->total;
    $this->$issue_salary_id = $allowance->issue_salary_id;
    $this->$issue_date = $allowance->issue_date;
    $this->$issue_by = $allowance->issue_by;
}
public function save(){
    $allowance = new Allowance();
    $allowance->user_id = $this->user_id;
    $allowance->allowance_name = $this->allowance_name;
    $allowance->allowance_details = $this->allowance_details;
    $allowance->allowance_type = $this->allowanc_type;
    $allowance->amount = $this->amount;
    $allowance->total = $this->total;
    $allowance->issued_salary_id = $this->issued_salary_id;
    $allowance->issue_date = $this->issue_date;
    $allowance->issue_by = $this->issue_by;

    $allowance->save();
return redirect(route('admin.allowance'));
}



    public function render()
    {
        return view('livewire.admin-allowance-edit-livewire');
    }
}
