@extends('layout.main')

@section('title', 'HDC Events')

@section('content')

    <div>
        <h1>Utilizando o Blade - Laravel</h1>
        {{-- validando variáveis dinâmicas vindo da rota --}}
        @if ($nome == 'Kauã')
            <p>Nome de usuário <strong><i>{{ $nome }}</i></strong></p>
        @else
            <p>Nome de usuário incorreto: <br>
                esperado: <strong>Kauã</strong> <br>
                Nome: <strong><i>{{ $nome }}</i></strong>
            </p>
        @endif

        {{-- Estruturas de repetição --}}
        @for ($i = 0; $i <= 3; $i++)
            <p><strong>{{ $i }}: </strong>{{ $namesArray[$i] }}</p>
        @endfor

        @php
            $num = 1;
        @endphp

        @while ($num <= 10)
            {{ $num++ }}
        @endwhile

        @foreach ($namesArray as $name)
            <p>
                <strong>{{ $loop->index + 1 }}: </strong>
                {{ $name }}
            </p>
        @endforeach

        {{-- Arquivos estáticos --}}
        <!-- -->
        <script src='./js/script.js'></script>
    </div>

@endsection
