<x-auth>
    <div class=" py-6 px-4 flex flex-col gap-5">
       <h1 class="text-2xl text-center ">Welcome Back!</h1>

       <form class="flex flex-col gap-5" action="">

        {{-- Username --}}
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >
        </div>

        {{-- Password --}}
        <div>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" >
        </div>

        <button class="button">Login</button>
       </form>

       <div class="text-sm flex justify-center items-center">
        <p>Don't have an account? <a href="{{route('register')}}" class="hover:text-blue-900 hover:underline">Sign up</a></p
       </div>
    </div>
</x-auth>
