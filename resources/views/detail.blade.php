@extends('base')

@section('title')
Detail
@endsection

@section('style')
<link rel="stylesheet" href="{{ url('css/detailstyle.css') }}" type="text/css" />
@endsection

@section('content')
<div class="container">
    <div class="ticket">
        <div class="topCircle"></div>
        <div class="horario">
            <div class="wrapper">
                <h2 id="hora">{{ $time }}</h2>
                <h4 id="fecha">{{ $date }}</h4>
            </div>
        </div>
        <div class="ticketWrapper">
            <div class="contenido">
                <h1 id="nombre">{{ $name }}</h1><br>
                <h2 id="precio">{{ $price }} €</h2>
            </div>
            <div class="acciones">
                <button class="btLista"><a href="{{ url('list/') }}">Back to the list</a></button>
                <button class="btInicio"><a href="{{ url('/') }}">Back to home</a></button>
                <button class="btComprar"><a href="{{ url('list/') }}">Buy</a></button>
            </div>
        </div>
        <div class="bottomCircle"></div>
    </div>
</div>
@endsection
