<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body>
        <h1>Titulo</h1>
        @if(3 > 5)
            <p>A condição é TRUE</p>
        @endif
            <p>{{$nome}}</p>


        @if($nome == "Caio")
        <p>O {{$nome}} tem {{$idade}} anos</p>
        @endif


        @for($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}}</p>
        @endfor


        @php
            $name = "Caio Croccia";
            echo $name;
        @endphp
        {{-- Este é o comentário do blade --}}
    </body>
</html>
