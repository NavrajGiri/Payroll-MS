<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $table = "bill";
    protected $fillable = ["bill_no","product_name","product_details","quantity","amount","total_amout"];
}
