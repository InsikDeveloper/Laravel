<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 font-poppins">

    <main class=" min-h-screen w-full flex items-center justify-center ">
    <div class="w-3/4 flex shadow-xl rounded-xl">
        <div class="w-1/2 flex justify-center items-center bg-black/70  rounded-l-xl">

            {{-- <h1 class="text-5xl font-semibold text-white">Logo</h1> --}}

            <img src="{{asset('assets/logo.png')}}" class="rounded-l-xl" alt="">



        </div>

        <div class="w-1/2">
            {{$slot}}
        </div>
    </div>

    </main>
</body>
</html>
