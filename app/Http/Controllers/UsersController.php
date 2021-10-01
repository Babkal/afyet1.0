<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;



class UsersController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('user.index', ['posts' => $posts,]);

    }

    public function create()
    {
        return view('user.create');

    }


    public function store(Request $request)
    {

        $data = request()->validate([
            'title'=>'required|min:3',

            'description'=>'required|min:3',
        ]);

        Post::create($data);


        return redirect()->route('user');
    }


    public function show($id)
    {

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
        return redirect('user');
    }
}
