@extends('layouts.master')

@section('title', 'Belajar Laravel!')

@section('content')
  <h1>Form Create</h1>

  <form action="/belajar/public/blog" method="post">
    Title <br><input type="text" name="title" ><br><br>
    Description <br><textarea name="description" rows="8" cols="80"></textarea><br>

    <input type="submit" name="submit" value="create">
    {{ csrf_field() }}
  </form>
@endsection
