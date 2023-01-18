<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'author_id'
    ];

    public function user() {
        $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function post_category() {
        return $this->belongsToMany(PostCategory::class, 'post_categories');
    }
}
