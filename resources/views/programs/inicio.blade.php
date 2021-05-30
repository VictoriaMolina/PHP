<?php

use App\Http\Controllers\ProgramController;

$program = null;
?>
@extends('layouts.master')

@section('title', 'Programs 2021')
{{-- Personalizo el header --}}
@section('header')

@parent
@stop

{{-- Personalizo el navbar --}}
@section('navbar')
<ul>
    <li><a href="{{action([ProgramController::class, 'create'])}}">New Program</a></li>
</ul>

@stop

{{-- Personalizo el content --}}
@section('content')
<div class="w-full max-w-xs w-1/3 p-10 self-auto flex-1">
    <table class="min-w-full table-auto mt-5">
        <thead class="justify-between">
            <tr class="bg-gray-800">
                <th class="px-16 py-2 text-white">id</th>
                <th class="px-16 py-2 text-white">Name</th>
                <th class="px-16 py-2 text-white">Genre</th>
                <th class="px-16 py-2 text-white">Chapters</th>
                <th class="px-16 py-2 text-white">Month</th>
                <th class="px-16 py-2"></th>
                <th class="px-16 py-2"></th>
            </tr>
        </thead>
        @forelse($programs as $program)
        <tbody class="bg-gray-200">
            <tr class="bg-white border-4 border-gray-200">
                <td class="px-16 py-2">{{$program->idProgram}}</td>
                <td class="px-16 py-2">{{$program->nameProgram}}</td>
                <td class="px-16 py-2">{{$program->genre}}</td>
                <td class="px-16 py-2">{{$program->chapters}}</td>
                <td class="px-16 py-2">{{$program->month}}</td>
                <td class="px-16 py-2"><a href="{{action([ProgramController::class, 'show'], ['id' => $program->idProgram])}}">Ver</a></td>
                <td class="px-16 py-2"><a href="{{action([ProgramController::class, 'destroy'], ['id' => $program->idProgram])}}">Eliminar</a></td>
            </tr>
            @empty
            <tr>
                <td>No Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@stop

{{-- Personalizo el footer --}}
@section('footer')
@parent
@stop