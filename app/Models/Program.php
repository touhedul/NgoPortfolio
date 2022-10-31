<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Str;
class Program extends Model
{
     protected $fillable=['title','details','image','type','category'];
     
     public function programUrl()
     {
          return route('program.single', [$this->id, Str::slug($this->title, '-')]);
     }
}
