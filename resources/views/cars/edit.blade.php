@extends('layouts.layouts')
@section('content')
	<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">Edit</h1>
      </div>
    </div>
@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>Errore: {{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif
<div class="row">
	<div class="col-lg-12">
		<div class="">
			<form action="{{route('cars.update', $car)}}" method="post">
			  @csrf
			  @method('PUT')
			  <div class="">
			    <label>Manifacturer:</label><br>
			    <input type="text" name="manifacturer" value="{{ $car->manifacturer}}" placeholder="manifacturer">
			  </div>
			  <div class="">
			    <label>Year:</label><br>
			    <input type="number" name="year" value="{{ $car->year}}" placeholder="year">
			  </div>
			  <div class="">
			    <label>Engine:</label><br>
			    <input type="text" name="engine" value="{{ $car->engine}}" placeholder="engine">
			  </div>
			  <div class="">
			    <label>Plate:</label><br>
			    <input type="text" name="plate" value="{{ $car->plate}}" placeholder="plate">
			  </div>
			  <div class="chekboxes">
			    <span>Type:</span>
			    @foreach ($tags as $tag)
			      <div>
			        <input type="checkbox" name="tags[]" {{ ($car->tags->contains($tag)) ? 'checked' : '' }} value="{{$tag->id}}">
			        <label>{{$tag->name}}</label>
			      </div>
			    @endforeach
			  </div>
				<div>
					<input type="submit" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<a class="btn btn-light" href="{{ route('cars.index')}}">go back</a>
</div>

@endsection
