<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Informatics Connect</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="bg-gray-300">

    <div class="flex flex-row w-full pl-6 bg-gray-300">
        <!-- Left Navbar -->
        <div class="flex flex-col w-16 bg-gray-400 pt-4 font-bold h-screen fixed z-10 py-2">
            <ul class="text-white">
                <div class="rounded-l-full md:flex-col items-center justify-center m-0 mb-12">
                    <img class=" w-8 mx-auto hover:" src="{{asset('asset/settings-62.png')}}" alt="">
                    <li class=" text-center">LOGO</li>
                </div>

                <a href="{{route('home')}}">
                <div class="{{ (request()->is('/')) ? 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass bg-gray-300 rounded-l-full text-black' : 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass rounded-l-full text-black' }}">
                    <img class="w-8 mx-auto" src="{{asset('asset/home.png')}}"  alt="">
                    <li class="text-center text-xs">Home</li>
                </div>
                </a>
                

                <a href="{{route('group')}}">
                    <div  class="{{ (request()->is('group')) ? 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass bg-gray-300 rounded-l-full text-black' : 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass rounded-l-full text-black' }}">
                        <img class="w-8 mx-auto" src="{{asset('asset/001-chat2.png')}}"  alt="">
                        <li class="text-center text-xs">Group Chat</li>
                    </div>
                </a>
                
                {{-- <a href="group chat.html">
                    <div class="mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full">
                        <img class="w-8 mx-auto" src="../src/asset/001-chat2.png"  alt="">
                        <li class="text-center text-xs">Group Chat</li>
                    </div>
                </a> --}}
                
                <a href="{{route('profile')}}">
                    <div class="{{ (request()->is('profile')) ? 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass bg-gray-300 rounded-l-full text-black' : 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass rounded-l-full text-black' }}">
                        <img class="w-8 mx-auto" src="{{asset('asset/avatar2.png')}}"  alt="">
                        <li class="text-center text-xs">Profile</li>
                    </div>
                </a>
                <a href="{{route('settings')}}">
                    <div class="{{ (request()->is('settings')) ? 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass bg-gray-300 rounded-l-full text-black' : 'mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full batass rounded-l-full text-black' }}">
                        <img class="w-8 mx-auto" src="{{asset('asset/settings-62.png')}}"  alt="">
                        <li class="text-center text-xs">Settings</li>
                    </div>
                </a>
                <a  href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                    <div class="mb-2 py-2 hover:text-black hover:bg-gray-300 rounded-l-full">
                        <img class="w-8 mx-auto" src="{{asset('asset/logout2.png')}}"  alt="">
                        <li class="text-center text-xs">Logout</li>
                    </div>
                </a>
                
                
            </ul>
        </div>

        <!-- Main Container -->
        <div class="main-content box-border p-4 bg-grey-300 w-full ml-16 h-screen">
            @yield('body')
        
            <!-- content suggestion -->
            <div class="border-l-2 border-yellow-900 flex-grow  w-3/12">
                @yield('sidebar')
                
            </div>
        </div>
    </div>
</body>
</html>
