<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiance extends Model
{
    use HasFactory;

    protected $fillable = ['url_images','id'];
}