@extends('base')

@section('title')
List
@endsection

@section('style')
<link rel="stylesheet" href="{{ url('css/liststyle.css') }}" type="text/css" />
@endsection

@section('content')
<div class="container">
    @foreach ($tickets as $ticket)
        <div class="ticket">
            <div class="horario">
                <div class="wrapper">
                    <h2 id="hora">{{ $ticket['time'] }} h</h2>
                    <h4 id="fecha">{{ $ticket['date'] }}</h4>
                </div>
            </div>
            <div class="ticketWrapper">
                <div class="contenido">
                    <h1 id="nombre">{{ $ticket['name'] }}</h1><br>
                    <h2 id="precio">{{ $ticket['price'] }} €</h2>
                </div>
                <div class="acciones">
                    <button class="btInicio"><a href="{{ url('/') }}">Back to home</a></button>
                    <button class="btComprar"><a href="{{ url('detail/' . $ticket['id']) }}">Details</a></button>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection