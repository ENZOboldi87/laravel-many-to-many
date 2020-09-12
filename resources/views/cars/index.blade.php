@extends('layouts.layouts')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">Cars list</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="float-right">
          <a class="btn btn-success" href="{{route('cars.create')}}">Add new car</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        @foreach ($cars as $car)
          <div>
            <a href="{{ route('cars.show', $car)}}">{{$car->manifacturer}} {{ $car->engine}}
            </a>
            <a class="btn btn-primary" href="{{route('cars.edit', $car)}}">edit</a>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
