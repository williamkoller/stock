@extends('layout.home')
@section('content')
    @if(empty($products))
        <div class="alert alert-danger">
            you have no registered product
        </div>
    @else
    <h1>List Stock</h1>
    <table class="table table-striped table-bordered table-hover">
        @foreach($products as $p)
        <tr class="{{ $p->amount<=1 ? 'table-danger' : '' }}">
            <td>{{ $p->name }}</td>
            <td>{{ $p->value }}</td>
            <td>{{ $p->description }}</td>
            <td>{{ $p->amount }}</td>
            <td>
                <a href="/products/views/{{ $p->id }}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    <h4>
        <span class="badge badge-danger float-right">
            one or more items in Stock
        </span>
    </h4>
@stop
