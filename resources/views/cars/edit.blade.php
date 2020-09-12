<h1>sono su edit</h1>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>Errore: {{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif

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
</form>
