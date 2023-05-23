<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    
    <body class="bg-slate-300">
        <section class="container mx-auto bg-slate-300">
            <section class="bg-slate-700 m-auto h-40 flex items-center justify-center">
                <h1 class="text-white text-3xl text-center font-bold">
                    NUMEROS PERFECTOS
                </h1>
            </section>
            
            <section class="bg-yellow-200f  top-0 left-0 h-full z-10 flex flex-col items-center  justify-start">
                <form action="{{route('obtenerPerfectos')}}" method="post" class="bg-gradient-to-tl from-white to-indigo-900 shadow-md rounded px-8 pt-4 pb-8 mb-4 mt-4">
                    @csrf                
                    <!--numero-->
                    <label>Ingrese Numero:</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="numero" min="1" required>
                    @error('numero')
                        <div>
                            {{$message}}
                        </div>
                    @enderror
    
                    <button type="submit" class="bg-transparent mt-4 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded"
                    >
                        GENERAR
                    </button>
                </form>
            </section>
           
            @isset($resultado, $divisoresStr, $sumaDivisores)
                <section>
                    El {{$numero}} sus divisores son: {{$divisoresStr}} = {{$sumaDivisores}} !!! {{ $resultado }}

                </section>
            @endisset
        </section>
    </body>
</html>
