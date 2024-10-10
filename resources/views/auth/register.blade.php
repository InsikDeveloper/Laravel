<x-auth>
    <div class=" py-6 px-4 flex flex-col gap-5">
       <h1 class="text-2xl text-center ">Register an Account</h1>

       <form class="flex flex-col gap-5" action="{{route('register')}}" method="post">
        @csrf

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
        {{-- COnfirm Password--}}
        <div>
            <label for="password">Confirm Password:</label>
            <input type="text" id="password_confirmation" name="password_confirmation" >
        </div>

        <button class="button">Register</button>
       </form>

       <div class="text-sm flex justify-center items-center">
        <p>Already have an account? <a href="{{route('login')}} " class="hover:text-blue-900 hover:underline">Login</a></p
       </div>
    </div>
</x-auth>
