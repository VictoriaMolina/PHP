@extends('layouts.master')

@section('title', 'Quiero este valor')
{{-- Personalizo el header --}}
@section('header')
    <h1>Mi primer view con plantilla en Laravel</h1>

    @parent
@stop

{{-- Personalizo el navbar --}}
@section('navbar')
    <h2>Menú de opciones</h2>

    @parent
@stop

{{-- Personalizo el content --}}
@section('content')
    @parent
    <p>Es el contenido de la página</p>
@stop

{{-- Personalizo el footer --}}
@section('footer')
    @parent
    <p>Es el contenido del footer</p>
@stop