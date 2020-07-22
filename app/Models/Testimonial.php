<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Str;
class Testimonial extends Model
{
     protected $fillable=['name','about','image','message'];
     
     public function testimonialUrl()
     {
          return route('testimonial.single', [$this->id, Str::slug($this->name, '-')]);
     }
}
