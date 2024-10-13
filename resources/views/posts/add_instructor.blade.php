<x-layout>
    <section class=" h-full flex flex-col items-center gap-4">
        <div class="flex justify-start w-full">
            <a href="{{route('instructors.index')}}"><i class="bi bi-arrow-left text-3xl"></i></a>
        </div>
        <form action="{{route('instructors.store')}}" method="POST" class="w-full flex flex-col gap-4 shadow-lg bg-white px-3 py-4 ">
            @csrf
            <h1 class="text-2xl font-semibold text-center text-slate-900 mb-2">Add New Instructor</h1>

            <p>{{session('success')}}</p>
        
            <div class="grid grid-cols-2 gap-3">
                    
            {{-- First Name --}}
            <div class="space-y-2">
                <label for="title" class="block">First Name</label>
                <input type="text" name="first_name" value="{{old('first_name')}}"  class="input  @error('first_name') ring-red-500    @enderror" >

                @error('first_name')
                    <p class="text-xs text-red-500">{{$message}}</p>
                @enderror
            </div>

            {{-- Last Name --}}
            <div class="space-y-2">
                <label for="title" class="block">Last Name</label>
                <input type="text" name="last_name" value="{{old('last_name')}}"   class="input   @error('last_name') ring-red-500    @enderror" >

                @error('last_name')
                    <p class="text-xs text-red-500">{{$message}}</p>
                @enderror
            </div>

            {{-- Email--}}
            <div class="space-y-2">
                <label for="title" class="block">Email</label>
                <input type="text" name="email" value="{{old('email')}}"   class="input @error('email') ring-red-500    @enderror" >
                @error('email')
                    <p class="text-xs text-red-500">{{$message}}</p>
                @enderror
            </div>

            {{-- Phone Number--}}
            <div class="space-y-2">
                <label for="title" class="block">Phone</label>
                <input type="text" name="phone" value="{{old('phone')}}" class="input @error('phone') ring-red-500  @enderror" >
                @error('phone')
                    <p class="text-xs text-red-500">{{$message}}</p>
                @enderror
            </div>

            {{-- Expertise --}}
            <div class="space-y-2">
                <label for="title" class="block">Expertise</label>
                <input type="text" name="expertise" value="{{old('expertise')}}" class="input @error('expertise') ring-red-500  @enderror" >
                @error('expertise')
                    <p class="text-xs text-red-500">{{$message}}</p>
                @enderror
            </div>

            {{-- Years of Experience --}}
            <div class=" flex flex-col " >
                <label for="years_of_experience">Years of Experience</label>
                <select name="years_of_experience" class="input bg-slate-100 py-2 text-center @error('years_of_experience') ring-red-500  @enderror" >
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="7">7</option>
                    <option value="12">12</option>
                </select>
                @error('years_of_experience')
                <p class="text-xs text-red-500">{{$message}}</p>
            @enderror
            </div>

            {{-- Status --}}
            <div class="space-y-2">
                <label for="title" class="block">Status</label>
                <input type="text" name="status" value="{{old('status')}}"   class="input @error('status') ring-red-500  @enderror" >
                @error('status')
                    <p class="text-xs text-red-500">{{$message}}</p>
                @enderror
            </div>
            </div>


            {{-- Add Course Button --}}

            <button class="w-full py-2 rounded-sm ring-2 ring-slate-900 hover:bg-slate-900 hover:text-white duration-200  font-semibold mt-8" >Add Instructor</button>

        </form>
    </section>
</x-layout>
