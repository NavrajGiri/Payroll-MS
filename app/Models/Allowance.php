<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    use HasFactory;
    protected $table = "allowance";
    protected $fillable = ["user_id","allowance_name","allowance_details","allowance_type","amount","total","issued_salary_id","issue_date",];

    function user(){
        return $this->belongsTo(User::class);
    }
    function issuedsalary(){
        return $this->belongsTo(IssuedSalary::class);
    }
}

