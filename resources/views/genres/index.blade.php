@extends('layout')

@section('title', 'Genres')

@section('main')


  <table class="table">
    <tr>
      <th>Genre</th>
    </tr>
    @forelse($genres as $genre)
      <tr>
        <td>
          <a href = "/genres/{{$genre->GenreId}}/edit" class = "text-info"><i class="far fa-edit mr-4"></i></a>
          <a href="/tracks?genre={{$genre->Name}}" class = "text-dark"> {{$genre->Name}} </a>
        </td>
      </tr>

      @empty
      <tr>
        <td colspan="4">No genres found</td>
      </tr>

    @endforelse
  </table>
@endsection