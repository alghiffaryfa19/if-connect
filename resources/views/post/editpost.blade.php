@extends('layouts.apps')
@section('title','Edit Post')
@section('body')
<!-- Statuses -->
<div class="xl:w-full xl:pt-14">
    <p class="mb-4 font-medium">Edit Post</p>
    <form action="{{route('post.update', $post->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password-lama">
            Picture
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required id="picture" type="file" name="post">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password-baru">
            Caption
            </label>
            <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$post->description}}</textarea>
        </div>
        <div class="flex items-center justify-between">
        <button type="submit" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Save
        </button>
        </div>
    </form>
    
</div>
@endsection