<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    // protected $fillable = ['email', 'password', 'name', 'float_number', 'image_path'];
    protected $fillable = ['email', 'password', 'name', 'float'];
}
