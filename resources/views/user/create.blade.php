
@extends('layouts.app')


@section('content')
<div class="sm:flex sm:justify-center mb-6 mt-20 ml-20 mr-20">
    

  <form action="store" method="post" class="block form">
    @csrf
    <label class="block">
      <span class="text-gray-700 font-bold">Title</span>
<br>
      <input type="text" name="title" class="form-input mt-4 block w-full" placeholder="Title">
    </label>
<br>
    <label for="description" class="block">
      <span class="text-grey-700 font-bold">Description</span>
      <br>
      <textarea name="description" id="description" cols="30" rows="10" class="block form-textarea w-full mt-4" placeholder="Description"></textarea>
    </label>
<div class="flex justify-items-end">
    <input type="submit" value="Post" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow mt-7 flaot-right">
</div>
</form>

  
@endsection