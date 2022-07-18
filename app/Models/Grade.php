<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table = "grade";
    protected $fillable =["rank_id","grade_name","salary_amount",];

    function rank(){
        return $this->belongsTo(rank::class);
    }


}
