<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $tableName = "posts";
    protected $fillable = ['title', 'slug', 'intro', 'body', 'user_id'];
}
