<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.main')
@section('title', 'HDC EVENTS')

@section('content') 


 


<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar um evento...">
    </form>
</div>

<div id="events-container" class="col-md-12  mt-4">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>

    <div id="cards-container" class="row " >
        @foreach($events as $event)
        <div class="card col-md-3" style="width: max-content;">
            <img src="/img/card.jpg" alt="{{$event->title}}" style="width: max-content;" >
            <div class="class-body">
                <div class="card-date">10/09/2020</div>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X participantes</p>
                <a href class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
</body>
</html>