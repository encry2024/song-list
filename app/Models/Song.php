<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $fillable = ['title', 'author', 'lyrics'];
}
