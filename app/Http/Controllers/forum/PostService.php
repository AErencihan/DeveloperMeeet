<?php

namespace App\Http\Controllers\forum;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostService extends Controller
{

    public function createPost(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = $this->findUserFromSessionEmail();
        Post::create($data);
        return redirect("/forum")->withSuccess('You have signed-in');
    }

    public function updatePost($request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->updated_at = $request->Date('Y-m-d');
        $post->save();
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
    }

    public function getPost($id): array
    {
        $post = Post::find($id);
        $post_id = $id;
        $comments = Comment::where('post_id', $post_id)->get();
        return compact('comments', 'post');
    }

    public function getPosts(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $posts = Post::all();
        return view('forum-liste', compact('posts'));
    }
    private function findUserFromSessionEmail()
    {
        session_start();
        $email = $_SESSION['user.email'];
        $user = User::where('email', $email)->first();
        return $user->id;
    }

}
