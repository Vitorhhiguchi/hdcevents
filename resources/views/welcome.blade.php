<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <h1>Alguma coisa</h1>

        <img src="/img/banner.jpg" alt="">

        @if (10 > 15)
            <h1>A condição é true</h1>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
            <p>O nome é Pedro</p>
        @elseif ($nome == "Vitor")
            <p>O nome é {{$nome}} e ele tem {{$idade}} anos, trabalha como {{$profissao}}</p>
        @else
            <p>O nome não é Pedro</p>
        @endif

        @for ($i=0; $i < count($arr); $i++)

            <p>{{$arr[$i]}} - {{$i}}</p>

            @if ($i == 2)
                <p>O i é igual a 2</p>
                <p>aaaa</p>
            @endif

        @endfor

        @foreach ($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>

        @endforeach

        @php
            $name = "Josevaldo Lopes";

            echo $name;
        @endphp

        <br>

        <a href="/contact">Contatos</a>
        <a href="/produtos">Produtos</a>
        <a href="/jagas">Jagas</a>

    </body>
</html>