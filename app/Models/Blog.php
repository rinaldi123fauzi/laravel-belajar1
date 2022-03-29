<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','excerpt','body']; //permit yang diizinkan
    // protected $guarded = ['title','excerpt','body']; //permit yang tidak diizinkan
}
