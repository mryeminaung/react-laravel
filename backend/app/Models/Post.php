<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $tableName = "posts";
    protected $fillable = ['title', 'slug', 'post_img', 'intro', 'body', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
