@extends('layout')

@section('content')
    <h1>Nagrajenci</h1>
    <ul>
    @foreach ($winners as $winner)
        <li>{{ $winner->full_name }}</li>
    @endforeach
    </ul>
@endsection

@section('title')
    Nagrajenci
@endsection