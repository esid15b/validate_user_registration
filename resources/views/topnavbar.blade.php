@extends('adminlte::page')


@section('content')

    <div id="app">
        <top-navbar-component></top-navbar-component>
    </div>


@stop


@section('js')

    <script src="{{ asset('js/app.js') }}"></script>
  
@stop
