@extends('layouts.apps')
@section('title','Profile')
@section('body')
<!-- Profile Bacground Image -->
<div class="relative">
    @if (empty($profile->photo_cover))
        <img src="{{asset('asset/bg.jpg')}}" class="w-full  h-60 object-cover" alt="">
    @else
        <img src="{{asset('uploads/'.$profile->photo_cover)}}" class="w-full  h-60 object-cover" alt="">
    @endif

    @if (empty($profile->photo_profile))
        <img class="w-32 absolute left-2 bottom-2 rounded-full" src="{{asset('asset/pp.jpg')}}" alt="">
    @else
        <img src="{{asset('uploads/'.$profile->photo_profile)}}" class="w-32 object-cover h-32 absolute left-2 bottom-2 rounded-full" alt="">
    @endif
</div>

<h1 class="font-bold text-4xl my-4">{{auth()->user()->name}}</h1>

<!-- Statuses -->
<div class="xl:w-full xl:pt-14">
    <p class="mb-4 font-medium">Create Post</p>
    <form action="{{route('post.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
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
            <textarea name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="flex items-center justify-between">
        <button type="submit" class="bg-gray-400 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Upload
        </button>
        </div>
    </form>
    
</div>
<div class="flex flex-row items-center justify-between flex-wrap mt-20">
    @forelse ($profile->post as $item)
    <div class="flex flex-col w-72 mb-8">
        <div class="p-2 bg-white rounded-lg mb-2">
            <img src="{{asset('uploads/'.$item->post)}}" alt="">
        </div>
        <div class="flex flex-row justify-between items-center">
            <a href="{{route('post.edit', $item->id)}}">Edit</a>
            <a href="{{route('hapus.post', $item->id)}}">Hapus</a>
        </div>
    @empty
        <h1>Belum Ada Foto</h1>
    @endforelse
</div>
@endsection