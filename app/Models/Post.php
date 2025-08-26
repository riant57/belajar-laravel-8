<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // field boleh diisi, sisanya nggak boleh
    protected $fillable = ['title','slug', 'excerpt', 'body'];

    // field yang tidak boleh diisi, sisanya boleh
    //protected $guarded = ['id'];
}
