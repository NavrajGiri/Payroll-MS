<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class AdminUserEditLivewire extends Component
{
    public $user_id,$computer_no,$email,$password,$rank,$date_of_birth,$gender,$merital_status,$address,$phone_no,$joining_date,$blood_group,$pan_no,$bank_no,$account_no,$grade_id,$nagrik_lagani_kosh_no;

    public function mount($user_id){
        $this->user_id = $user_id;
        $user = User::find($user_id);
        $this->name = $user->name;
        $this->computer_no = $user->computer_no;
        $this->rank = $user->rank;
        $this->date_of_birth = $user->date_of_birth;
        $this->gender = $user->gender;
        $this->merital_status = $user->merital_status;
        $this->address = $user->address;
        $this->phone_no = $user->phone_no;
        $this->joining_date = $user->joining_date;
        $this->blood_group = $user->blood_group;
        $this->pan_no = $user->pan_no;
        $this->account_no = $user->account_no;
        $this->grade_id = $user->grade_id;
        $this->nagrik_lagani_kosh_no= $user->nagrik_lagani_kosh_no;

    }

    public function save(){
        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->computer_no = $this->computer_no;
        $user->rank = $this->rank;
        $user->name = $this->name;
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

        $user->save();
        return redirect(route('admin.user'));

    }
    public function render()
    {
        return view('livewire.admin-user-edit-livewire');
    }
}
