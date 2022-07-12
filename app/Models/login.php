<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    protected $table = "login";
    protected $fillable = ["admin_code","admin_name","admin_email","admin_password"];
}