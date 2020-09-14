@extends('index')
@section('title', 'Sales')
@section('content')
<div class="container mt-5">
    <h2>Your Sales</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">Yard</th>
            <th scope="col">Type</th>
            <th scope="col">Year</th>
            <th scope="col">Purchase Price</th>
            <th scope="col">Ticket Price</th>
            <th scope="col">Manage</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->car->yard['name'] }}</td>
                <td>{{ $sale->car['type'] }}</td>
                <td>{{ $sale->purchase_date }}</td>
                <td>{{ $sale->purchase_price }}</td>
                <td>${{ $sale->car['price'] }}</td>
            <td><a href="/dashboard/sales/{{ $sale->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>
@endsection
