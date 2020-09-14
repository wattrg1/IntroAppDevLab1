<!-- resources/views/dashboard/reservationCreate.blade.php -->
@extends('index')
@section('title', 'Create sale')
@section('content')
<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h2>{{ $yardInfo->name }} - <small class="text-muted">{{ $yardInfo->location }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Buy Now</p>
            <form action="{{ route('sales.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="car">Car Type</label>
                            <select class="form-control" name="car_id">
                                @foreach ($yardInfo->cars as $option)
                                    <option value="{{$option->id}}">{{ $option->type }} - ${{ $option->price }}</option>
                                @endforeach
                            </select>

                        </div>




                    </div>

                    <div class="col-sm-4">
                                           <div class="form-group">
                                               <label for="purchase_price">Purchase Price</label>
                                               <input class="form-control" name="purchase_price" value="1000" >
                                           </div>
                                       </div>
                                       <div class="col-sm-6">
                                           <div class="form-group">
                                               <label for="purchase_date">Purchase Date</label>
                                               <input type="date" class="form-control" name="purchase_date" value="2020-09-01">
                                           </div>
                                       </div>


                </div>
                <button type="submit" class="btn btn-lg btn-primary">Buy it</button>
            </form>
        </div>
    </div>
</div>
@endsection
