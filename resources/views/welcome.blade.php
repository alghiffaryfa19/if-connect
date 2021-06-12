@extends('layouts.apps')
@section('title','Home')
@section('body')
<div class="ml-4 mr-4 mt-10 w-100 w-9/12" style="padding-left:5vw;" >
    <!-- welcome -->
    <div class="flex ml-5 mr-5 justify-between items-center ">
        <div class="w-5/12">
            <input type="text" placeholder="Search" class="bg-white rounded-full w-full h-12 pl-5 font-semibold">
        </div>
        <p class="font-semibold">Welcome {{auth()->user()->name}}!</p>
    </div>
    {{-- <p class="ml-5 font-bold mt-5">See your friend story!</p>
    <div class="flex w-full max-h-16 px-3">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
        <img class="w-1/12 mx-2 rounded-full" src="../src/asset/story-1.jpg" alt="">
    </div> --}}
    <!-- content post flex -->
    <div class="flex flex-wrap justify-between">
        @foreach ($post as $item)
            <div class="m-0  m-5 w-60">
                <a href="">
                    <div class="h-60 bg-yellow-600 rounded-2xl border-8">
                        <img src="{{asset('uploads/'.$item->post)}}" alt="photo" class="object-cover h-full rounded-2xl" >
                    </div>
                </a>
               
                <div class="flex justify-between mt-2 h-7">
                    <a href="" class="flex align-center items-center">
                        <div class="rounded-full bg-black w-7 h-7">s</div>
                        <p class="ml-1">{{$item->profile->user->name}}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection