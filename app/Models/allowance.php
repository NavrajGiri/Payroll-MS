<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allowance extends Model
{
    use HasFactory;
    protected $table = "allowance";
    protected $fillable = ["computer_no","rank","name","allowance_name","allowance_details","allowance_type","amout","method","total","issue_date","issue_by"];
}
