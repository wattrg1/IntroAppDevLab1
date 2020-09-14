@extends('index')
@section('title', 'Edit Sale')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all booked for the {{ $yardInfo->name }} in {{ $yardInfo->location }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $yardInfo->image }}" class="img-fluid" alt="Front of yard">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                            {{ $yardInfo->name }} - <small>{{ $yardInfo->location }}</small>
                        </h3>
                        <p class="card-text">{{ $yardInfo->description }}</p>
                        <p class="card-text"><strong>Car: </strong>{{ $sale->car['type'] }}</p>
                        <p class="card-text"><strong>Purchase Proce: </strong>{{ $sale->purchase_price }}</p>
                        <p class="card-text"><strong>Ticket Price: </strong>${{ $sale->car['price'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/dashboard/sales/{{ $sale->id }}/edit" class="btn btn-lg btn-success">Edit this sale</a>
                    <a href="/dashboard/sales/{{ $sale->id }}/delete" class="btn btn-lg btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
