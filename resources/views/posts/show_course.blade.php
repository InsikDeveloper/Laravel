
<x-layout>
    <h1 class="text-2xl font-semibold text-center mb-5">Courses Information</h1>

  
    <div class="flex flex-col  gap-3">
        @if ($courses->isEmpty())
       <div class="flex flex-col items-center">
        <h3 class="">There's no added Instructor yet!</h3>
        <a href="{{ route('add_course') }}" class="hover:text-sky-500 hover:underline">Add Course</a>
       </div>
    @else
       <div class="flex flex-col gap-5">
        <div class="flex justify-end">
            <a href="{{ route('add_course') }}"  class="rounded-lg py-2 px-3 ring-1 hover:ring-slate-500 hover:bg-slate-500 hover:text-white  font-semibold duration-200 text-sm">Add Course</a>
        </div>
        <table class="table-auto w-full shadow-lg ">
            <thead class="">
              <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Duration</th>
                  <th>Instructor</th>   
              </tr>
            </thead>
           <tbody>
        

              @foreach ($courses as $item)
                <tr>
                  <td>{{$item->title}} </td>
                  <td>{{Str::words($item->description,5)}} </td>
                  <td>{{$item->duration}} </td>
                  <td>{{ $item->instructor->first_name }} {{ $item->instructor->last_name }}</td>
              </tr>
              @endforeach
           
           </tbody>
          </table>
       </div>
        @endif
    </div>
   
</x-layout>