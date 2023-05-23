<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    
    <body class="bg-slate-300 ">
        <section class="bg-slate-700 m-auto h-40 flex items-center justify-center ">
            <h1 class="text-white text-3xl text-center font-bold">
                EJEMPLOS PRACTICA N°5
            </h1>
        </section>

        <div class="bg-slate-700 bg-opacity-50 p-4 mt-10 rounded-lg flex gap-20 text-center ">
            <a class="text-lg font-black text-sky-600 hover:text-sky-400 underline" href="{{ route('fibonacci') }}">1: FIBONACCI</a>
            <a class="text-lg font-black text-sky-600 hover:text-sky-400 underline" href="{{ route('numPalabra') }}">2: NUMERO DE PALABRAS DE CADENA</a>        
            <a class="text-lg font-black text-sky-600 hover:text-sky-400 underline" href="{{ route('numVocales') }}">3: NUMERO DE VOCALES DE UNA CADENA</a>       
            <a class="text-lg font-black text-sky-600 hover:text-sky-400 underline" href="{{ route('numPerfectos') }}">4: NUMEROS PERFECTOS</a>
        </div>
    </body>
</html>
