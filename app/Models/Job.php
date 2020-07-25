<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Str;
class Job extends Model
{
     protected $fillable=['title','details','image','location','last_date'];
     public $table = "myjobs";
     
     public function jobUrl()
     {
          return route('job.single', [$this->id, Str::slug($this->title, '-')]);
     }
}
