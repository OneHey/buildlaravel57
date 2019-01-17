<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PostDetails extends Model
{
    public $table = "post_details";
    use Notifiable;
    protected $fillable = ['post_id', 'filename'];

    public function product()
    {
        return $this->belongsTo(Post::class);
    }
}
