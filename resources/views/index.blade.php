@extends('layout')

@section('title', 'Home')

@section('main')

  <div class = "row mt-4">

    <div class = "col-12 text-center">

      <h3> Welcome to ITP Tunes </h3>

    </div>

<div class = "col-12 mt-3 text-center">

  <a href = "/genres" class = "btn btn-info"> Genres </a>

  <a href = "/tracks" class = "btn ml-3 btn-success"> Tracks </a>

  <a href = "/playlists" class = "btn ml-3 btn-primary"> Playlists </a>

</div>

</div>


@endsection