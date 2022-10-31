<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFeedback extends Model
{
    protected $fillable = ['name', 'phone', 'email','type', 'message', 'feedback'];
}
