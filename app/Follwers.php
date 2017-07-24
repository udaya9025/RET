<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follwers extends Model
{
    protected $table="followers";

    protected $fillable=['user_id','follower_id'];
}
