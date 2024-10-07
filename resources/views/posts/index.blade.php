<x-layout>
    <div>
        <h1 class="text-2xl font-semibold text-center text-slate-900 mb-5"">Offered Courses</h1>

        {{-- Courses in a Card Component Form --}}
       <div class="grid grid-cols-3 gap-4">
        <div class="flex flex-col gap-2 shadow-lg py-3 px-2">
            <h3 class="font-semibold text-center text-xl">Javascript</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus magnam, ratione sit explicabo voluptates omnis eligendi dicta, quas odio doloremque assumenda in, veritatis facilis? Id dolorum distinctio sit esse.</p>

           <div class="flex justify-between">
            <div>
                <p>Instructor Img</p>
                <div>
                    <p>Instructor Name</p>
              <div>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
              </div>
                </div>
            </div>
            <div>
                <p>created at</p>
            </div>
           </div>
        </div>


       </div>
        {{-- <h1 class="text-3xl font-bold underline text-blue-500">Hello World</h1> --}}


</x-layout>
