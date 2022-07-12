<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salary_details extends Model
{
    use HasFactory;
    protected $table = "salary_details";
    protected $fillable = ["old_salary","permotion_date","no_of_grade","add_salary","allowance","method","total","issue_date","issue_by"];
}
