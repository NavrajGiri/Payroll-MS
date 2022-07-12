<?php

namespace App\Http\Controllers;
use App\Models\Salary_details;
use Illuminate\Http\Request;

class Salary_detailsController extends Controller
{
    function insert3 (){
        $salary  = new Salary_details();
        $salary->old_salary = "";
        $salary->permotion_date = "";
        $salary->no_of_grade  = "";
        $salary->add_salary = "";
        $salary->allowance ="";
        $salary->method ="";
        $salary->total = "";
        $salary->issue_date = "";
        $salary->issue_by = "";

        // echo $salary->old_salary;
        // $salary->save();

    }
}


function update3 () {
    $salary =Salary_details::find();
    $salary->computer_no  = 272606;
    $salary->save;
}

function delete3 (){
    $salary =Salary_details::find();
    $salary->delete();

}

function view3 (){
    $result =Salary_details::find();
    $data = ["efgh"=>$result];
    return view ("salary_display",$data);

}




