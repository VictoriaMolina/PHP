<?php

use App\Http\Controllers\ProgramController;

?>

@if(isset($program) && is_object($program))
<?php
$id = $program->idProgram;
$nameProgram = $program->nameProgram;
$genre = $program->genre;
$chapters = $program->chapters;
$month = $program->month;
?>
@else
<?php
$id = "";
$nameProgram = "";
$genre = "";
$chapters = "";
$month = "";
?>
@endif

@extends('layouts.master')

@section('title', 'Update')
{{-- Personalizo el header --}}
@section('header')

@parent
@stop

{{-- Personalizo el navbar --}}
@section('navbar')
<ul>
    <li><a href="">New Program</a></li>
</ul>

@stop

{{-- Personalizo el content --}}
@section('content')
<div class="w-full max-w-lg w-1/3 p-10 ml-8">
    <form class=" bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{isset($program) ? action([ProgramController::class, 'update']) : action([ProgramController::class, 'store'])}}" method="post">
        {{csrf_field()}}

        <input type="hidden" name="id" value="{{$id}}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="{{$nameProgram}}" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="genre">Genre</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="genre" value="{{$genre}}" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="chapters">Chapters</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="chapters" value="{{$chapters}}" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="month">Month</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="month" value="{{$month}}" />
        </div>
        <input class="bg-blue-500 text-white shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" type="submit" value="{{isset($program) ? 'Update' : 'Send'}}">
    </form>
</div>
@stop

{{-- Personalizo el footer --}}
@section('footer')
@parent
@stop