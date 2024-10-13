<x-layout>

    <section>
    <div class="grid grid-cols-3 gap-5">
        @foreach($courses as $course)

        <div class="flex flex-col gap-2 shadow-lg py-3 px-2 hover:translate-y-1 duration-300">
            {{-- <a href="{{route('show_course', $course->id)}}" class="font-semibold text-center text-xl">{{$course->title}}</a> --}}
          <div class="flex items-center justify-between">
            <h4  class="font-semibold text-center text-xl">{{$course->title}}</h4>
            <div class="flex gap-2 items-center">
                <div class="w-2 h-2 rounded-full bg-green-500 animate-ping   "></div>
                <p class="text-xs">Ongoing</p>
            </div>
          </div>


            <p class="font-semibold text-sm">{{ $course->description }}</p>

           <div class="flex items-center justify-between mt-4">
            <div class="flex gap-3 items-center">
                <div class="w-14 h-14 rounded-full overflow-hidden">
                    <img class="object-cover w-full h-full" src="{{ asset('assets/me.jpg') }}" alt="">
                </div>

                <div>
                    <p class="text-xs">{{$course->instructor->first_name}} {{$course->instructor->last_name}}</p>
              <div>
                <i class="bi bi-star text-yellow-600"></i>
                <i class="bi bi-star text-yellow-600"></i>
                <i class="bi bi-star text-yellow-600"></i>
                <i class="bi bi-star text-yellow-600"></i>
                <i class="bi bi-star text-yellow-600"></i>
              </div>
                </div>
            </div>
         

           </div>
          
           <div class="flex justify-between my-3">
            <p class="text-xs text-center">Duration: <span class="font-semibold"> {{$course->duration}}</span></p>
            {{-- <p>Created At: {{$course->created_at->diffForHumans()}}</p> --}}
            <p class="text-xs">Created At: <span class="font-semibold"> {{$course->created_at->diffForHumans()}}</span></p>
           </div>

           <div class="flex items-center gap-3 my-3">
            <h5 class="text-xs">Students Enrolled: </h5>

          <div class="relative flex items-center">
            <div class="w-6 h-6 rounded-full overflow-hidden absolute left-0">
                <img class="object-cover w-full h-full" src="{{ asset('assets/me.jpg') }}" alt="">
            </div>
            <div class="w-6 h-6 rounded-full overflow-hidden absolute  left-[12px]">
                <img class="object-cover w-full h-full" src="{{ asset('assets/4.jpg') }}" alt="">
            </div>
            <div class="w-6 h-6 rounded-full overflow-hidden absolute  left-[24px]">
                <img class="object-cover w-full h-full" src="{{ asset('assets/8.jpg') }}" alt="">
            </div>
            <div class="w-6 h-6 rounded-full overflow-hidden absolute  left-[36px]">
                <img class="object-cover w-full h-full" src="{{ asset('assets/5.jpg') }}" alt="">
            </div>
            <div class="w-6 h-6 rounded-full overflow-hidden absolute  left-[48px]">
                <img class="object-cover w-full h-full" src="{{ asset('assets/6.jpg') }}" alt="">
            </div>
            <div class="w-6 h-6 rounded-full overflow-hidden absolute  left-[60px]">
                <img class="object-cover w-full h-full" src="{{ asset('assets/3.jpg') }}" alt="">
            </div>
          </div>
           </div>


           <form action="{{route('coures.destroy', $course->id)}}" method="POST">
               @csrf
               @method('DELETE')
                <button class="py-2 w-full border-[1px] border-solid  border-red-600 rounded-lg text-sm font-semibold hover:bg-red-700 hover:text-white duration-200">Delete Course</button>
               </form>


        </div>

@endforeach
    </div>
</section>

</x-layout>