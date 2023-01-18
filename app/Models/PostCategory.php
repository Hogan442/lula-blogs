<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;


    // Please finish
    protected $fillable = [
        ''  
    ];

    public function post() {
        return $this->hasMany(Post::class);
    }

    public function category() {
        return $this->hasMany(Categoty::class);
    }
}
