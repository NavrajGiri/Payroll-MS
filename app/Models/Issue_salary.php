<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issue_salary extends Model
{
    use HasFactory;
    protected $table = "issue_salary";
    protected $fillable = ["user_id","date","note","amount","issued_by"];
}
