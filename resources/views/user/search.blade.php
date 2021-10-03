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
            <form action="{{route('store')}}" method="post" class="block form m-8">
                @csrf
                <label class="block">
                    <span class="text-gray-700 font-bold">Title</span>
                    <br>
                    <input type="text" name="title" class="form-input mt-4 block w-full"
                           placeholder="Title" value="{{old('title')}}">
                    <span class="pt-1 text-red-500">{{$errors->first('title')}}</span>
                </label>
                <br>
                <label for="content" class="block">
                    <span class="text-grey-700 font-bold">Content</span>
                    <br>
                    <textarea name="content" id="content" cols="30" rows="10" class="block
                   form-textarea w-full mt-4" placeholder="content" value="{{old('content')
                   }}"></textarea>
                </label>

                <span class="pt-1 text-red-500">{{$errors->first('content')}}</span>
                <div class="flex">
                    <input type="submit" value="Post"
                           class="items-end bg-green-500 hover:bg-blue-700 text-white
                           font-bold py-2
                           px-4 rounded shadow mt-7 flaot-right">
                </div>
            </form>
            <div class="flex flex-col m-8">
                <form action="{{route('search')}}" method="get" class="flex
                form-input">

                    <input type="text" class="text" name="id" value="1">
                    <input type="submit" value="search"
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow "/>


                </form>

            </div>

            {{--            Posts--}}

        </div>
        <div class="col-span-3 bg-gray-200">
            <div><h1 class="font-bold text-center mt-4">Posts</h1></div>

                <br>
                <div
                    class="max-w-sm rounded overflow-hidden shadow-lg bg-indigo-50 self-center mx-2">

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$post->title}}</div>
                        <p class="text-gray-700 text-base">
                            {{$post->content}}
                        </p>
                    </div>
                    <div class="flex px-1 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <form action="{{route('delete', $post)}}" method="post">
                            @csrf
                            <input type="submit" value="Delete"
                                   class="bg-red-700 text-white rounded shadow p-1">
                        </form>
                    </div>
                </div>

        </div>
    </div>

@endsection
