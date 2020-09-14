<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('index')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center my-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage your Sales</h4>
                <p class="card-text">Modify your current sales.</p>
                <a href="/dashboard/sales" class="btn btn-primary">My Sales</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Find a Car</h4>
                <p class="card-text">Browse our catalog of top-rated yards.</p>
                <a href="/yards" class="btn btn-primary">Our Yards</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
