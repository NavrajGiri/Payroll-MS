<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;
    protected $table = "grades";
    protected $fillable =["rank_id","grade_name","salary_amount",];
}
