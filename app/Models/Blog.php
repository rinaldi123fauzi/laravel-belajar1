<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','user_id','category_id','slug','excerpt','body']; //permit yang diizinkan
    // protected $guarded = ['title','excerpt','body']; //permit yang tidak diizinkan

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
