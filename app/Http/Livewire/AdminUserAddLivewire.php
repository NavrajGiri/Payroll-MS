<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class AdminUserAddLivewire extends Component
{
    public $user_id,$computer_no,$date_of_birth,$gender,$merital_status,$address,$phone_no,$joining_date,$blood_group,$pan_no,$bank_name,$account_no,$grade_id,$nagarik_lagani_kosh_no;

    public function save(){
        $user = new User();
        $user->user_id = $this->user_id;
        $user->computer_no = $user->computer_no;
        $user->date_of_birth = $user->date_of_birth;
        $user->gender = $user->gender;
        $user->merital_status = $user->merital_status;
        $user->address = $user->address;
        $user->phone_no = $user->phone_no;
        $user->joining_date = $user->joining_date;
        $user->blood_group = $user->blood_group;
        $user->pan_no = $user->pan_no;
        $user->account_no = $user->account_no;
        $user->grade_id = $user->grade_id;
        $user->nagarik_lagani_kosh_no= $user->nagarik_lagani_kosh_no;

        $user->save();
        return redirect(route('admin.user'));
    }
    public function render()
    {
        return view('livewire.admin-user-add-livewire');
    }
}
