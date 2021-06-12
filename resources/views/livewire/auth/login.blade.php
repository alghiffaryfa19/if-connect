<div class="flex">
    <div class="bg-white bg-opacity-50 w-9/12 mt-20">
        <div class="flex flex-col items-center ">
            <div class="bg-white opacity-50 w-8/12"></div>
            <img src="{{asset('asset/if Connect.png')}}" alt="" class="w-32 h-32">
            <h6 class="text-3xl font-bold text-yellow-900">Meet Different People</h6>
            <h6 class="text-3xl font-bold text-yellow-900">From Different Major</h6>
        </div>
    </div>
    <div class="w-3/12 justify-end h-screen bg-gray-300 border-yellow-800 px-6  ">
        <form class="rounded mt-16 py-6 w-full text-yellow-900" wire:submit.prevent="authenticate">
        
            <div class="flex flex-col items-center ">
                <h1 class="text-xl font-bold">LOGIN</h1>
                <h4 class="font-bold">Informatics Connect</h4>
            </div>
            <div class="mt-4 w-12/12 mb-6">
                <div class="mb-4 w-full ">
                    <label class="block text-yellow-900 text-sm font-bold mb-2 w-full" for="email">
                      Email
                    </label>
                    <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-yellow-900 text-sm font-bold mb-2" for="password">
                      Password
                    </label>
                    <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col items-center" >
                <button type="submit" class="hover:bg-gray-700 text-yellow-900 border border-yellow-900 py px-6 rounded focus:outline-none focus:shadow-outline" type="button">
                    login
                </button>
            </div>
            
            <div class="fmt-6 flex flex-col text-sm">
                <a href="{{route('register')}}">Doesn't have account yet?</a>
            </div>
            
        </form>
    </div>

</div>