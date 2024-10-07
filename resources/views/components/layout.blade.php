
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class=" bg-slate-100 font-poppins">

        <header class="bg-slate-900 text-white py-6 px-4 shadow-xl" >
            <nav class="flex justify-between items-center">
                <h1><a href="{{route('home')}}" class="text-3xl font-semibold">FreeCodeCamp ni Michael</a></h1>

                <div>
                    <a href="{{route('add-course')}}" class="group ring-2 py-3 px-4 ring-white/90 rounded-sm hover:bg-sky-500 hover:ring-sky-500
                    ">
                        <i class="bi bi-plus-lg font-bold"></i>
                    </a>


                </div>
            </nav>
        </header>
        <main class=" p-4">



            {{$slot}}
        </main>
    </body>
</html>
