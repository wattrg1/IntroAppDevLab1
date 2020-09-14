<!-- resources/views/hotels.blade.php -->
@extends('index')
@section('title', 'Yards')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        @foreach ($yards as $yard)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('{{ $yard->image }}');height:300px;background-size:cover;" class="img-fluid" alt="Front of yard"></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $yard->name }}</h5>
                    <small class="text-muted">{{ $yard->location }}</small>
                    <p class="card-text">{{ $yard->description }}</p>
                    <a href="/dashboard/sales/create/{{ $yard->id }}" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
