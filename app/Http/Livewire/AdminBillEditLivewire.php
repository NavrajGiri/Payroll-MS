<?php

namespace App\Http\Livewire;
Use App\Models\Bill;
use Livewire\Component;

class AdminBillEditLivewire extends Component
{

    public $id,$bill_no,$user_id,$product_name,$product_details,$quantity,$amount,$issued_salary_id,$total_amount;
    public function mount($id){
        $this->id = $bill_id;
        $bill = Bill::find($id);
        $this->bill_no = $bill->$bill_no;
        $this->user_id = $bill->$user_id;
        $this->product_name = $bill->$product_name;
        $this->product_details = $bill->$product_details;
        $this->quantity = $bill->$quantity;
        $this->amount = $bill->$amount;
        $this->issued_salary_id = $bill->$issued_salary_id;
        $this->total_amount = $bill->$total_amount;

    }

    public function save(){
$bill = Bill::find($this->id);
$this->bill_no = $bill->$bill_no;
$this->user_id = $bill->$user_id;
$this->product_name = $bill->$product_name;
$this->product_details = $bill->$product_details;
$this->quantity = $bill->$quantity;
$this->amount = $bill->$amount;
$this->issued_salary_id = $bill->$issued_salary_id;
$this->total_amount = $bill->$total_amount;
$bill->save();
return redirect(route('admin.bill'));

        }

        public function render()
        {
            return view('livewire.admin-bill-edit-livewire');
        }
    }


