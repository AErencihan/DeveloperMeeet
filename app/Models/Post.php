<?php

namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public static function create(array $array)
    {
        $post = new Post();
        $post->title = $array['title'];
        $post->content = $array['content'];
        $post->user_id = $array['user_id'];
        $post->save();
        return $post;
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
