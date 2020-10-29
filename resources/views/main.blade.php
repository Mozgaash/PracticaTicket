@extends('base')

@section('title')
Main
@endsection

@section('style')
<link rel="stylesheet" href="{{ url('css/mainstyle.css') }}" type="text/css" />
@endsection

@section('content')
<div class="container">
    <div class="btLista">
        <a href="{{ url('list/') }}"><button href="{{ url('list/') }}"><h1>SEE TICKETS LIST</h1></button></a>
    </div>
</div>
@endsection