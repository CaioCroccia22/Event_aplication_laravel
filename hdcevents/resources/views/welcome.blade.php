@extends('layout.main')
<!-- Extendendo o layout de main -->
@section('title', 'HDC Events')
<!-- Inserindo na section content -->
@section('content')
    <h1>Titulo Caio</h1>
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

    @foreach($nomes as $nome)
        <p>{{$loop -> index}}</p>
        <p>{{$nome}}</p>
    @endforeach

    {{-- Este é o comentário do blade --}}
@endsection
