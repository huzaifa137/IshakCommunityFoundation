<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsor_a_child extends Model
{
    use HasFactory;

    protected $fillable =['image','age','firstname','schoolname','location','lastname','supportcatogory','grade'];
    protected $table ='sponsor';
    public $timestamps =false;
}
