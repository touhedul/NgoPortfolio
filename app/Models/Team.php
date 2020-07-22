<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Str;
class Team extends Model
{
     protected $fillable=['name','about','image','email','phone','designation'];
     
     public function teamUrl()
     {
          return route('team.single', [$this->id, Str::slug($this->name, '-')]);
     }
}
