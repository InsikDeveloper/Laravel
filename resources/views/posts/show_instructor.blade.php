<x-layout>
    <h1 class="text-2xl font-semibold text-center mb-5">Instructors Information</h1>

  
    <div class="flex flex-col  gap-3">
        @if ($instructors->isEmpty())
       <div class="flex flex-col items-center">
        <h3 class="">There's no added Instructor yet!</h3>
        <a href="{{route('add.instructor')}}" class="hover:text-sky-500 hover:underline">Add Instructor</a>
       </div>
    @else
       <div class="flex flex-col gap-5">
        <div class="flex justify-end">
            <a href="{{route('add.instructor')}}"  class="rounded-lg py-2 px-3 ring-1 hover:ring-slate-500 hover:bg-slate-500 hover:text-white  font-semibold duration-200 text-sm">Add Instructor</a>
        </div>
        <table class="table-auto w-full shadow-lg ">
            <thead class="">
              <tr>
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Expertise</th>
                  <th>Years of Experience</th>
                  <th>Status</th>
                  <th></th>
              </tr>
            </thead>
           <tbody>
              {{-- <tr>
                  <td>Jeric Polison</td>
                  <td>jeric@gmail.com</td>
                  <td>09510776203</td>
                  <td>Full Stack</td>
                  <td>3 years</td>
                  <td >Available</td>
              </tr> --}}

              @foreach ($instructors as $item)
                <tr>
                  <td>{{$item->first_name}} {{$item->last_name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->expertise}}</td>
                  <td>{{$item->years_of_experience}} years</td>
                  <td >{{$item->status}}</td>
              </tr>
              @endforeach
           
           </tbody>
          </table>
       </div>
        @endif
    </div>
   
</x-layout>