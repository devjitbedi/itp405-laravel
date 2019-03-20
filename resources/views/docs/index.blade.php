@extends('layout')

@section('title', 'Docs')

@section('main')

<!-- Content Editable Div -->
<h2> Feel free to say anything you feel about music... </h2>

<div contenteditable="true" id= "edit">
  This text can be edited by the user.
</div>

<script src="docs.js"></script>

@endsection