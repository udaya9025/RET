<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poetry extends Model
{
   protected $table="poetry";

   protected $fillable=['title','body','author','pid','published_at'];
}
