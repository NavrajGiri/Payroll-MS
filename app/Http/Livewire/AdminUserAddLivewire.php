<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Rank;
use App\Models\User;
use Livewire\Component;

class AdminUserAddLivewire extends Component
{
    public $name,$computer_no,$email,$password,$rank,$date_of_birth,$gender,$merital_status,$address,$phone_no,$joining_date,$blood_group,$pan_no,$bank_no,$account_no,$grade_id,$nagrik_lagani_kosh_no;

    public function save(){
        $user = new User();
        $user->name = $this->name;
        $user->computer_no = $this->computer_no;
        $user->rank = $this->rank;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->rank = $this->rank;
        $user->date_of_birth = $this->date_of_birth;
        $user->gender = $this->gender;
        $user->merital_status = $this->merital_status;
        $user->address = $this->address;
        $user->phone_no = $this->phone_no;
        $user->joining_date = $this->joining_date;
        $user->blood_group = $this->blood_group;
        $user->pan_no = $this->pan_no;
        $user->bank_no = $this->bank_no;
        $user->account_no = $this->account_no;
        $user->grade_id = $this->grade_id;
        $user->nagrik_lagani_kosh_no= $this->nagrik_lagani_kosh_no;
        // dd($user);
        $user->save();
        return redirect(route('admin.user'));
    }
    public function render()
    {
        $all_ranks = Rank::all();
        $all_grades = Grade::all();
        return view('livewire.admin-user-add-livewire',[
            'all_ranks'=>$all_ranks,
            'all_grades'=>$all_grades,
        ]);
    }
}
