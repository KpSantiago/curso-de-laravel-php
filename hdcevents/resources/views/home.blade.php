@extends('layout.main')

@section('title', 'X Events')

@section('content')

    <section id="bannerContainer">
        <h1>Busque por eventos!</h1>
        <form action="" class="searcForm">
            <input type="search" name="searchBox" class="searchInput" placeholder="Buscar...">
        </form>
    </section>
    <section id="eventsContainer">
        <h2 class="title">Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias!</p>
        <div class="container">
            @foreach ($events as $event)
                <div class="event">
                    <div class="item imageBox"></div>
                    <p class="item date">25/08/2023</p>
                    <p class="item title">{{ $event->title }}</p>
                    <p class="item participants">{{ $event->participants }} participantes</p>
                    <a href="#" class="item viewEventBtn">Saiba mais</a>
                </div>
            @endforeach
        </div>
    </section>

@endsection
