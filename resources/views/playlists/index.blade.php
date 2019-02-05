@extends('layout')

@section('title', 'Playlists')

@section('main')
  <div class="row">
    <div class="col-3">
    	<a href ="/playlists/new" class = "btn btn-primary mb-2 mt-3 ml-3"> Add a Playlist </a>

      <ul>
        @forelse($playlists as $playlist)
          <li>
          	<a href = "/playlists/{{$playlist->PlaylistId}}" class = "text-dark">
            {{$playlist->Name}}
        </a>
          </li>
        @empty
          <li><i>No Playlists</i></li>
        @endforelse
      </ul>
    </div>
    <div class="col-9 mt-5">
    	<ul>
      @forelse($tracks as $track)
      	<li>{{$track->Name}} </li>
      @empty
      <li> <i> No tracks for this playlist! </i></li>
      @endforelse
  		</ul>
    </div>
  </div>
@endsection