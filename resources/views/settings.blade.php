@extends('layout')

@section('title', 'Settings')

@section('main')
  <h1>Settings</h1>
  
  <p> <em> Leave blank to turn off, check box to turn on. </em> </p>
  <form method="post" action = "/settings">
    @csrf
    <div class="form-group">
      <label for="maintenance">Maintenance</label>
      <input type="checkbox" id="maintenance" name="maintenance" class="form-control">
    </div>
    <input type="submit" value="Save" class="btn btn-primary">
  </form>
@endsection