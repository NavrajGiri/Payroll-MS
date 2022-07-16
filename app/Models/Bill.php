<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "bills";
    protected $fillable = ["bill_no","user_id","product_name","product_details","quantity","amount","issued_salary_id","total_amount"];


    function issuedsalary(){
        return $this->belongsTo(IssuedSalary::class);
    }

    function  user(){
        return $this->belongsTo(user::class);
    }
}
