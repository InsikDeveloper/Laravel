<x-layout>
    <div>
        <h1 class="text-2xl font-semibold text-center text-slate-900 mb-5"">Offered Courses</h1>

        {{-- Courses in a Card Component Form --}}
        <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p>Duration: {{ $course->duration }}</p>
    <a href="{{ route('home') }}">Back to Courses</a>

</x-layout>
