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
          <a href="/tracks?genre={{$genre->GenreName}}"> {{$genre->GenreName}} </a>
        </td>
      </tr>

      @empty
      <tr>
        <td colspan="4">No genres found</td>
      </tr>

    @endforelse
  </table>
@endsection