@extends('layout')

@section('title', 'Edit a Genre')

@section('main')
  <div class="row">
    <div class="col mt-4">
      <form action="/genres/{{@$genres->GenreId}}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Genre Name</label>
          <input type="text" id = "name" name="name" class="form-control" value = "{{ $errors->first('name') ? old('name') : @$genres->Name }}">
          <small class = "text-danger"> {{$errors->first('name')}} </small>
        </div>
        <button type="submit" class="btn btn-info">
          Save
        </button>
      </form>
    </div>
  </div>
@endsection

