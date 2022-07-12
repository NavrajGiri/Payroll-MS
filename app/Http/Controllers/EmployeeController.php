<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
       function insert (){
        $employee = new employee();
        $employee->computer_no ="272606";        
        $employee->rank ="lcpl";
        $employee->firstname ="navraj";
        $employee->lastname ="giri";
        $employee->date_of_birth ="2051/4/10";
        $employee->gender ="male";
        $employee->merital_status ="married";
        $employee->address ="kohalpur-11banke";
        $employee->phone_no ="9848062346";
        $employee->joining_date ="2071";
        $employee->blood_group ="o+ve";
        $employee->pan_no ="15879943354";
        $employee->bank_name ="mega_bank_ltd";
        $employee->account_no ="78956545214655";
        $employee->nagrik_la_kosh ="587954566";

        // echo $employee->computer_no;
        $employee->save();
       
   
    }


    function update () {
        $employee = Employee::find();
        $employee->computer_no  = 272606;
        $employee->save;
    }

    function delete (){
        $employee =Employee::find();
        $employee->delete();

    }

    function view (){
        $result = employee::find();
        $data = ["abcd"=>$result];
        return view ("employee_display",$data);

    }
}
