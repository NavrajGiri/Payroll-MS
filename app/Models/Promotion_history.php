<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion_history extends Model
{
    use HasFactory;
    protected $table = "promotion_history";
    protected $fillable = ["user_id","date","grade",];
}
