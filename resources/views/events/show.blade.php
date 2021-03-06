@extends('layouts/main')

@section('title', 'Evento - ' . $event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-nd-6">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
        </div>

        <div id="info-container" class="col-md-6">
            <h1>{{ $event->title }}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon> 25 participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Dono do evento</p>
            <a href="#" class="btn btn-info" id="event-submit">confirmar presença</a>

            <h3>Vai constar no evento:</h3>
            <ul id="items-list">
            @if($event->items)
                @foreach($event->items as $item)
                    <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
                @endforeach
            @else
                <p class="text-danger">Nenhum item de infraestrutura consta para esse evento!</p>
            @endif
            </ul>
        </div>

        <div class="col-md-12" id="description-container">
            <h3>Sobre o evento:</h3>
            <p class="event-description">{{ $event->description }}</p>
        </div>
    </div>
</div>

@endsection