<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = "employee";
    protected $fillable = ["computer_no","rank","firstname","lastname","date_of_birth","gender","merital_status","address","phone_no","joining_date","blood_group","pan_no","bank_name","account_no","nagrik_la_kosh"];
}
