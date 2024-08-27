<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Tanginamo</title>

    </head>
    <body class="bg-green-500 flex justify-center items-center h-screen w-screen">
        {{-- <div class="text-center animate-spin ">
        <span class="text-5xl font-extrabold text-red-700 rotate-180">WEB DESIGN IS MY PASSION</span>
        
    </div> --}}
    <div class="h-24 w-24 bg-red-500 animate-spin duration-1000"></div>
    </body>
</html>
