<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];

    public static function create(array $data)
    {
        $comment = new Comment();
        $comment->content = $data['content'];
        $comment->post_id = $data['post_id'];
        $comment->save();
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
