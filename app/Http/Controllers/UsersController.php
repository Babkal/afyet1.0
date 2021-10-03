<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;



class UsersController extends Controller
{

    public function index()
    {
        $posts = Post::all()->sortByDesc('id');

        return view('user.index', ['posts' => $posts,]);

    }

    public function create()
    {
        return view('user.create');

    }


    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $data = request()->validate([
            'title'=>'required|min:3',

            'content'=>'required|min:3',
        ]);

        Post::create($data);


        return redirect()->route('user');
    }


    public function search(Request $request)
    {
$post = Post::findOrFail($request->id);

//dd($posts);
return view('user.search', compact('post'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('user');
    }
}
