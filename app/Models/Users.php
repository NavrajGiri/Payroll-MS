<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table ="users";
    protected $fillable
    =["name","computer_no","rank","date_of_birth","gender","merital_status","address","phone_no","joining_date","blood_group","pan_no","bank_no","account_no","grade_id","magrik_lagani_kosh_no","type"];
}
