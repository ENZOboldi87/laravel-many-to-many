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
        <div class="d-flex">
            @foreach ($cars as $car)
              <div>
                <a href="{{ route('cars.show', $car)}}"><h3>{{$car->manifacturer}} {{ $car->engine}}</h3>
                </a>
                <a class="btn btn-primary" href="{{route('cars.edit', $car)}}">edit</a>
                <div>
          				<form action="{{ route('cars.destroy', $car) }}" method="post">
          					@csrf
          					@method('DELETE')

          					<input type="submit" value="Delete Car">
          				</form>
          			</div>
              </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>

@endsection
