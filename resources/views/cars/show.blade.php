@extends('layouts.layouts')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">Details</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="">
          <h2> {{ $car->manifacturer}} {{ $car->engine }}</h2>
          <div>
            @foreach ($car->tags as $tag)
              <span>Type: {{$tag->name}}</span>
            @endforeach
          </div>
          <ul>
            <li>Year: {{ $car->year }}</li>
            <li>Plate: {{ $car->plate }}</li>
          </ul>

          <h3>Owner details</h3>
          <p>
            <b>{{ $car->user->name}}</b>
          </p>
          <p>
            For contacts: <br>
            <i>{{ $car->user->email}}</i>
          </p>
        </div>
      </div>
    </div>
    <a class="btn btn-light" href="{{ route('cars.index')}}">go back</a>
  </div>




@endsection
