<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="bg-body-pattern">
    <header class="bg-gray-900 h-20">
        <div classs="container mx-auto flex felx-row">
            <div>
                @section('header')

                @show
            </div>
            <div>
            </div>
        </div>