<!-- resources/views/hotels.blade.php -->
@extends('index')
@section('title', 'Yards')
@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Loop through hotels returned from controller -->
        @foreach ($people as $people)
        <li>
            <a href="/contacts/{{$people->id}}">
            {{$people->first}}
            </a>
        </li>
        @endforeach
    </div>
</div>
@endsection
