@extends('layout')

@section('title', 'Docs')

@section('main')

<!-- Content Editable Div -->
<h2> Feel free to say anything you feel about music... </h2>

<div contenteditable="true" id= "edit">
  Let's just talk about music and love each other.
</div>

<script src="/js/docs.js"></script>

@endsection