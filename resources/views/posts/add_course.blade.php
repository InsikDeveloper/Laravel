<x-layout>
    <section class=" h-full flex  justify-center mt-4 ">
        <form action="" class="w-1/2 flex flex-col gap-4 shadow-lg bg-white px-3 py-4 ">
            <h1 class="text-2xl font-semibold text-center text-slate-900 mb-2">Add New Course</h1>
            {{-- Course Title --}}
            <div class="space-y-2">
                <label for="title" class="block">Course Title</label>
                <input type="text" name="title" placeholder="course title..." class="border rounded p-2 w-full">
            </div>

            {{-- Course Description --}}
            <div class="space-y-2">
                <label for="description" class="block">Course Description</label>
                {{-- <input type="text" name="description" placeholder="course description..." class="border rounded p-2 w-full"> --}}
                <textarea name="" id="" cols="30" rows="10" placeholder=""  ></textarea>
            </div>

            {{-- Course Duration --}}
            <div class="space-y-2">
                <label for="duration" class="block">Course Duration</label>
                {{-- <input type="text" name="duration" placeholder="course duration..." class="border rounded p-2 w-full">--}}
                <select name="duration" id="duration" class="w-full text-center py-2 bg-slate-900/10">
                    <option value="">1d</option>
                    <option value="">1w</option>
                    <option value="">1m</option>
                    <option value="">2m</option>
                    <option value="">Others</option>
                </select>
            </div>

            {{-- Add Course Button --}}

            <button class="w-full py-2 rounded-sm ring-2 ring-slate-900 hover:bg-slate-900 hover:text-white duration-200  font-semibold mt-8" >Add Course</button>

        </form>
    </section>
</x-layout>
