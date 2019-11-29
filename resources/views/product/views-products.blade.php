@extends('layout.home')
@section('content')
    <h1>Details Product: {{ $p->name }}</h1>
    <ul>
        <li>Value: {{ $p->value }}</li>
        <li>Description: {{ $p->description }}</li>
        <li>Amount: {{ $p->amount }}</li>
    </ul>
@stop
