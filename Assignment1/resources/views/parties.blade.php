
@extends('index')
@section('title', 'Parties')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        @foreach ($parties as $party)
        <div class="col-sm-4">
            <div class="card mb-3">
                <div style="background-image:url('{{ $party->image }}');height:300px;background-size:cover;" class="img-fluid" alt="..."></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $party->name }}</h5>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>
@endsection