@extends('layouts.layouts')
@section('content')
  <h1>Add auto</h1>
{{-- Validazione form --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

{{-- Add new car form ---}}
<form action="{{route('cars.store')}}" method="post">
  @csrf
  @method('POST')
  <label>Manifacturer:</label><br>
  <input type="text" name="manifacturer" value="{{ old('manifacturer')}}" placeholder="manifacturer">
  <br>
  <br>
  <label>Year:</label><br>
  <input type="number" name="year" value="{{ old('year')}}" placeholder="year">
  <br>
  <br>
  <label>Engine:</label><br>
  <input type="text" name="engine" value="{{ old('engine')}}" placeholder="engine">
  <br>
  <br>
  <label>Plate:</label><br>
  <input type="text" name="plate" value="{{ old('plate')}}" placeholder="plate">
  <br>
  <br>
  <div class="chekboxes">
    <span>Type:</span>
    @foreach ($tags as $tag)
      <div>
        <input type="checkbox" name="tags[]" value="{{$tag->id}}">
        <label>{{$tag->name}}</label>
      </div>
    @endforeach
  </div>
  <br>
  <br>
  <div>
    <select name="user_id">
      @foreach ($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <br>
  <br>
  <input type="submit" name="" value="save">
</form>
@endsection
