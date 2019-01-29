@extends('layout')

@section('title', 'Tracks')

@section('main')


  <table class="table">
    <tr>
      <th>Genre</th>
      <th>Track</th>
      <th>Artist</th>
      <th>Album</th>
      <th>Price</th>
    </tr>
    @forelse($tracks as $track)
      <tr>
        <td>
          {{$track->Genre}}
        </td>
         <td>
          {{$track->Track}}
        </td>
         <td>
          {{$track->Artist}}
        </td>
         <td>
          {{$track->Album}}
        </td>
         <td>
          {{$track->Price}}
        </td>
      </tr>

      @empty
      <tr>
        <td colspan="4">No tracks found</td>
      </tr>

    @endforelse
  </table>
@endsection