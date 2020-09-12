<h1>Cars list</h1>
<div>
  <a href="{{route('cars.create')}}">Add new car</a>
</div>
<br>
<br>
@foreach ($cars as $car)
  <div>
    <a href="{{ route('cars.show', $car)}}">{{$car->manifacturer}} {{ $car->engine}}
    </a>
    <a href="{{route('cars.edit', $car)}}">edit</a>
  </div>
@endforeach
