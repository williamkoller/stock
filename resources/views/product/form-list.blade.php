@extends('layout.home')
@section('content')
    <h1>New Product</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/products/news" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input name="description" class="form-control" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <label>Value</label>
            <input name="value" class="form-control" value="{{ old('value') }}">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount" class="form-control" value="{{ old('amount') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Add</button>
    </form>
@stop
