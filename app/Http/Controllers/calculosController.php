<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculosController extends Controller
{
    function calcularSerie(Request $request){
        $request->validate([
            'n' => 'required|numeric|min:1|max:20',
        ]);
        $n = intval($request->n);
        
        $secuencia = [0, 1]; // Inicializamos la secuencia con los primeros dos números

        for ($i = 2; $i < $n; $i++) {
            $secuencia[$i] = $secuencia[$i - 1] + $secuencia[$i - 2]; // Generamos el siguiente número sumando los dos anteriores
        }

        $serie = implode(',',$secuencia); //usamos como delimitador a la ',' por delante
        return view('vistaSerie', compact('n', 'serie'));
    }

    function calcularNumeroPalabras(Request $request){
        $request->validate([
            'cadena' => 'required',
        ]);
        $cadena = $request->cadena;
        
        $contadorPalabras = str_word_count($cadena);
        return view('vistaNumeroPalabras', compact('cadena', 'contadorPalabras'));
    }

    function calcularVocales(Request $request){
        $request->validate([
            'cadena' => 'required',
        ]);
        $cadena = $request->cadena;

        $contadorVocales = substr_count(strtolower($cadena), 'a') + 
                           substr_count(strtolower($cadena), 'e') +
                           substr_count(strtolower($cadena), 'i') +
                           substr_count(strtolower($cadena), 'o') +
                           substr_count(strtolower($cadena), 'u');
        
        return view('vistaVocales', compact('cadena', 'contadorVocales'));
    }

    public function calcularPerfectos(Request $request)
    {
        $request->validate([
            'numero' => 'required|numeric|min:1',
        ]);

        $numero = intval($request->input('numero'));
        $sumaDivisores = 0;
        $divisores = [];

        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $sumaDivisores += $i;
                $divisores[] = $i;
            }
        }

        $esPerfecto = ($sumaDivisores == $numero);
        $divisoresStr = implode('+ ', $divisores);

        $resultado = ($esPerfecto) ? 'ES un número perfecto' : 'NO es un número perfecto';

        return view('vistaPerfectos', compact('numero', 'divisoresStr', 'resultado', 'sumaDivisores'));
    }
}