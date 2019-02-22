@extends('layout')

@section('title', 'Profile')

@section('main')
  <p>Your email is {{$user->email}}</p>

  <br>

  <a href = "/settings"> Settings </a>
@endsection