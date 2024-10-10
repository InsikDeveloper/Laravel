<x-layout>
    <div>
        <h1 class="text-2xl font-semibold text-center text-slate-900 mb-5"">Offered Courses</h1>

        {{-- Courses in a Card Component Form --}}
        @if ($courses->isEmpty())
        <h1 class="text-2xl font-semibold text-center w-full">There's no courses added yet.</h1>
        @else
        <div class="grid grid-cols-3 gap-4">

            @foreach($courses as $course)

             <div class="flex flex-col gap-2 shadow-lg py-3 px-2 hover:translate-y-1 duration-300">
                 <a href="{{route('show_course', $course->id)}}" class="font-semibold text-center text-xl">{{$course->title}}</a>
                 <p class="font-semibold text-sm">{{ $course->description }}</p>


                <div class="flex items-center justify-between mt-4">
                 <div class="flex gap-3 items-center">
                     <div class="w-16 h-16 rounded-full overflow-hidden">
                         <img class="object-cover w-full h-full" src="{{ asset('assets/me.jpg') }}" alt="">
                     </div>

                     <div>
                         <p class="text-xs">Bipop Ain't Scared</p>
                   <div>
                     <i class="bi bi-star text-yellow-600"></i>
                     <i class="bi bi-star text-yellow-600"></i>
                     <i class="bi bi-star text-yellow-600"></i>
                     <i class="bi bi-star text-yellow-600"></i>
                     <i class="bi bi-star text-yellow-600"></i>
                   </div>
                     </div>
                 </div>
                 <div>


                 </div>

                </div>
                <p class="text-xs text-center">Duration: {{ $course->duration}}</p>
                <p>Created At: {{$course->created_at->diffForHumans()}}</p>

                <form action="{{route('delete', $course->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                     <button class="py-2 w-full border-[1px] border-solid  border-red-600 rounded-lg text-sm font-semibold hover:bg-red-700 hover:text-white duration-200">Delete Course</button>
                    </form>


             </div>

     @endforeach
     </div>


        @endif


</x-layout>
