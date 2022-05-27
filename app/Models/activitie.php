<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activitie extends Model
{
    use HasFactory;

    protected $table = 'activity';
    public $timestamps = false;
    protected $fillable =['title','image','money_up','goal','activity'];
}
