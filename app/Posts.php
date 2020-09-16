<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['fname','lname','address','age','contact'];
    protected $dates = ['created_at','updated_at'];
}