@extends('layouts.main')

@section('title', 'Home page')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>

    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Pesquise por um evento...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h1>
    <p>Veja os eventos dos próximos dias</p>
    <hr>
    
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-sm-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="banner-card">
                <div class="card-body">
                    <p class="card-date">05/05/2021</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">x participantes</p>
                    <p>Esse evento é {{ $event->private == 1 ? 'privado' : 'público'}}</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-info">Saiba mais</a>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection