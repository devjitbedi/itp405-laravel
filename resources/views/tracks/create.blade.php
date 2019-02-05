@extends('layout')

@section('title', 'Add a Track')

@section('main')
  <div class="row">
    <div class="col mt-4">
      <form action="/tracks" method="post">
        @csrf
        <div class="form-group">

          <label for="name">Track Name</label>
          <input type="text" id = "name" name="name" class="form-control" value = "{{old('name')}}">
          <small class = "text-danger"> {{$errors->first('name')}} </small><br>
          
          <label class = "mt-3" for="album">Album</label>
          <select id = "album" name="album" class="form-control">
            @foreach($albums as $album)
            <option value="{{$album->AlbumId}}" {{$album->AlbumId == old('album') ? "selected" : ""}}> 
              {{$album->Title}}
            </option>
             @endforeach
          </select>
          <small class = "text-danger"> {{$errors->first('album')}} </small><br>

          <label class = "mt-3" for="media">Media Type</label>
          <select id = "media" name="media" class="form-control">
            @foreach($mediatypes as $mediatype)
            <option value="{{$mediatype->MediaTypeId}}" {{$mediatype->MediaTypeId == old('media') ? "selected" : ""}}> 
              {{$mediatype->Name}}
            </option>
             @endforeach
          </select>
          <small class = "text-danger"> {{$errors->first('media')}} </small><br>

          <label class = "mt-3" for="genre">Genre</label>
          <select id = "genre" name="genre" class="form-control">
             @foreach($genres as $genre)
            <option value="{{$genre->GenreId}}" {{$genre->GenreId == old('genre') ? "selected" : ""}}> 
              {{$genre->Name}}
            </option>
             @endforeach
          </select>
          <small class = "text-danger"> {{$errors->first('genre')}} </small><br>

           <label class = "mt-3" for="composer">Composer</label>
          <input type="text" id = "composer" name="composer" class="form-control" value = "{{old('composer')}}">
          <small class = "text-danger"> {{$errors->first('composer')}} </small><br>

          <label class = "mt-3" for="milliseconds">Milliseconds</label>
          <input type="number" id = "milliseconds" name="milliseconds" class="form-control" value = "{{old('milliseconds')}}">
          <small class = "text-danger"> {{$errors->first('milliseconds')}} </small><br>

          <label class = "mt-3" for="bytes">Bytes</label>
          <input type="number" id = "bytes" name="bytes" class="form-control" value = "{{old('bytes')}}">
          <small class = "text-danger"> {{$errors->first('bytes')}} </small><br>

          <label class = "mt-3" for="price">Unit Price</label>
          <input type="number" id = "price" name="price" class="form-control" value = "{{old('price')}}">
          <small class = "text-danger"> {{$errors->first('price')}} </small><br>

        </div>
        <button type="submit" class="btn btn-success">
          Save
        </button>
      </form>
    </div>
  </div>
@endsection