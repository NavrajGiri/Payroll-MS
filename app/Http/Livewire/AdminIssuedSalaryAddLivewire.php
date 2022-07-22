<?php

namespace App\Http\Livewire;
use App\Models\IssuedSalary;
use App\Models\User;
use Livewire\Component;

class AdminIssuedSalaryAddLivewire extends Component
{
    public $note, $method;
    public function issue_salary($user_id){
        $user = User::find($user_id);
        $salary = $user->grade()->first()->salary_amount;

        $bills = $user->bill()->whereNull('issued_salary_id')->get();
        $total_bills = 0;
        foreach($bills as $bill){
            $total_bills = $total_bills + $bill->amount;
        }

        $allowances = $user->allowance()->whereNull('issued_salary_id')->get();
        $total_allowance = 0;
        foreach($allowances as $allowance){
            if($allowance->allowance_type == "debit") {
                $allowance->amount = -$allowance->amount;
            }
            $total_allowance = $total_allowance + $allowance->amount;
        }

        $total = $salary + $total_bills + $total_allowance;

        $issue = new IssuedSalary();
        $issue->user_id = $user_id;
        $issue->date = date("Y-m-d");
        $issue->note = $this->note;
        $issue->method = $this->method;
        $issue->amount = $total;
        $issue->issued_by = auth()->user()->id;
        $issue->save();

        foreach($bills as $bill){
            $bill->issued_salary_id = $issue->id;
            $bill->save();
        }

        foreach($allowances as $allowance){
            $allowance->issued_salary_id = $issue->id;
            $allowance->save();
        }


    }
    public function render()
    {
        $all_users = User::all();
        $salariesThisMonth = IssuedSalary::whereDate('date','>=',date('Y-m-').'01')
                                        ->whereDate('date','<',date('Y-m-',strtotime(date("F")." next month")).'01')
                                        ->get();
        $user_ids = [];
        $salary_user_id = [];
        foreach($all_users as $user){
            $user_ids[] = $user->id;
        }
        foreach($salariesThisMonth as $sal){
            $salary_user_id[] = $sal->user_id;
        }

        $to_pay_users = array_diff($user_ids,$salary_user_id);

        $all_users = User::whereIn('id',$to_pay_users)->get();

        return view('livewire.admin-issued-salary-add-livewire',['all_users'=>$all_users]);
    }
}
