<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;
use App\Models\User;
use Livewire\Component;

class AdminIssuedSalaryAddLivewire extends Component
{
        public $user_id,$date,$note,$amount,$method,$issued_by;
        function save(){
            $issuedsalary = new IssuedSalary();
            $issuedsalary = $this->user_id;
            $issuedsalary->date = $this->date;
            $issuedsalary->note = $this->note;
            $issuedsalary->amount = $this->amount;
            $issuedsalary->method = $this->method;
            $issuedsalary->issued_by = $this->issued_by;

            $issuedsalary->save();


            return redirect(route('admin.issuedsalary'));
        }
        public function render()
        {
            $all_issuedsalary = IssuedSalary::all();
            return view('livewire.admin-issued-salary-add-livewire',['all_issuedsalary'=>$all_issuedsalary]);

            $all_users = User::all();
            return view('livewire.admin-issued-salary-edit-livewire',['all_users'=>$all_users]);
        }
    }
