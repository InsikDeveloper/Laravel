<x-auth>
    <div class=" py-6 px-4 flex flex-col gap-5">
       <h1 class="text-2xl text-center ">Welcome Back!</h1>

       <form class="flex flex-col gap-5" action="">

        {{-- Username --}}
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="@error('email') ring-red-500 @enderror"  >
            @error('email')
            <p class="text-xs text-red-500">{{$message}}</p>
        @enderror
        </div>

        {{-- Password --}}
        <div>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" class="@error('password') ring-red-500 @enderror" >
            @error('email')
            <p class="text-xs text-red-500">{{$message}}</p>
        @enderror
        </div>

        <button class="button">Login</button>
       </form>

       <div class="text-sm flex justify-center items-center">
        <p>Don't have an account? <a href="{{route('register')}}" class="hover:text-blue-900 hover:underline">Sign up</a></p
       </div>
    </div>
</x-auth>
