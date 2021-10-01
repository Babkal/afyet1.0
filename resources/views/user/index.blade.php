@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-10 gap-1 h-screen">
        <div class="col-span-3 bg-gray-200">
            <div class="mt-4">
                <p class="font-bold text-center">Profile</p>
                <br><br>
                <h1 class="font-bold"></h1>
            </div>
        </div>
        <div class="col-span-4 bg-gray-50">
            <form action="{{url('/user/store')}}" method="post" class="block form">
                @csrf
                <label class="block">
                  <span class="text-gray-700 font-bold">Title</span>
            <br>
                  <input type="text" name="title" class="form-input mt-4 block w-full" placeholder="Title" value="{{old('title')}}">
                  <p class="pt-1 text-red-500">{{$errors->first('title')}}</p>
                </label>
            <br>
                <label for="description" class="block">
                  <span class="text-grey-700 font-bold">Description</span>
                  <br>
                  <textarea name="description" id="description" cols="30" rows="10" class="block form-textarea w-full mt-4" placeholder="Description" value="{{old('description')}}"></textarea>
                </label>

                <p class="pt-1 text-red-500">{{$errors->first('description')}}</p>
            <div class="flex justify-items-end">
                <input type="submit" value="Post" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow mt-7 flaot-right">
            </div>
            </form>
            <div class="flex flex-col justify-center m-8">
                <form action ="/user/create" method="get">
                    @csrf
                <input type="submit" value="New Post" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow "/>
            </form>
            </div>


        </div>
        <div class="col-span-3 bg-gray-200">
            <div><h1 class="font-bold text-center mt-4">Posts</h1></div>
            @foreach ($posts as $post)
            <br>
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-indigo-50 self-center mx-2">

                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">{{$post->title}}</div>
                  <p class="text-gray-700 text-base">
                    {{$post->description}}
                  </p>
                </div>
                <div class="flex px-1 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <form action="/user/{{$post->id}}" method="post">
                    @csrf
                    <input type="submit" value="Delete" class="bg-red-700 text-white rounded shadow p-1">
                  </form>
                </div>
              </div>
            @endforeach
        </div>
      </div>

@endsection
