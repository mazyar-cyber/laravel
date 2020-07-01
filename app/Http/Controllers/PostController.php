<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Events\PostViewEvent;
use App\Http\Middleware\Authenticate;
use App\Http\Requests\CreatePostRequest;
use App\Policies\PostPolicy;
use App\Post;
use http\Client\Curl\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("post.index", compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post();
        $file = $request->file('pic');
        $name = $file->hashName();
        $file->move('image/post', $name);
        $post->path = $name;
        $post->name = $request->title;
        $post->lastname = $request->des;
        $post->user_id = 1;
        $post->save();
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        event(new PostViewEvent($post));
        return view("post.show", compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        $user = Auth::user();
//        if ($user->can('update', $post)) {
        return view('post.edit', compact(['post']));
//        }
//        else{
//            echo "You have Not premision to access this webpage";
//        }
//        if (Gate::allows('edit-post', $post)) {
//            return view('post.edit', compact(['post']));
//        } else {
//            echo "You have Not premision to access this webpage";
//        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->name = $request->title;
        $post->lastname = $request->des;
        $post->save();
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->forceDelete();
        return redirect('posts');
    }


}
