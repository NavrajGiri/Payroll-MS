<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    use HasFactory;
    protected $table = "bills";
    protected $fillable = ["bill_no","user_id","product_name","product_details","quantity","amount","issue_salary_id","total_amount"];
}
