<x-auth>
    <div class=" py-6 px-4 flex flex-col gap-5">
       <h1 class="text-2xl text-center ">Register an Account</h1>

       <form class="flex flex-col gap-5" action="{{route('register')}}" method="post">
        @csrf

        {{-- Username --}}
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="@error('username') ring-red-500 @enderror">
            @error('username')
                <p class="text-xs text-red-500">{{$message}}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="@error('email') ring-red-500 @enderror" >
            @error('email')
            <p class="text-xs text-red-500">{{$message}}</p>
        @enderror
        </div>

        {{-- Password --}}
        <div>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" class="@error('password') ring-red-500 @enderror">
            @error('password')
            <p class="text-xs text-red-500">{{$message}}</p>
        @enderror
        </div>
        {{-- COnfirm Password--}}
        <div>
            <label for="password">Confirm Password:</label>
            <input type="text" id="password_confirmation" name="password_confirmation" class="@error('password') ring-red-500 @enderror" >
            @error('password')
            <p class="text-xs text-red-500">{{$message}}</p>
        @enderror
        </div>

        <button class="button">Register</button>
       </form>

       <div class="text-sm flex justify-center items-center">
        <p>Already have an account? <a href="{{route('login')}} " class="hover:text-blue-900 hover:underline">Login</a></p
       </div>
    </div>
</x-auth>
