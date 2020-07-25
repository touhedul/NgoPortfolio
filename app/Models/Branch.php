<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Str;
class Branch extends Model
{
     protected $fillable=['title','details','image','short_details','phone'];
     
     public function branchUrl()
     {
          return route('branch.single', [$this->id, Str::slug($this->title, '-')]);
     }
}
