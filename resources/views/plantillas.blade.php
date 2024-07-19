@extends('layouts.app')

@section('tittle', "plantillas en laravel")

@push('css')
    <style>
        body{
            background-color: rgb(250, 174, 236)
        }
    </style>
@endpush

@push('css')
    <style>
        p{
            font-size: 50px;
            color: red
        }
    </style>
@endpush

@section('content')
    <h1>este es el contenido variable de la ventana</h1>
    <p>Este contenido cambia</p>
@endsection