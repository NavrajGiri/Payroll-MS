<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuedSalary extends Model
{
    use HasFactory;
    protected $table = "issue_salary";
    protected $fillable = ["user_id","date","note","amount","method","issued_by"];
}
