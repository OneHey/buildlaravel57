<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public $table = "post";
    use SoftDeletes;

    protected $fillable = ['title', 'content', 'users_id'];
}
