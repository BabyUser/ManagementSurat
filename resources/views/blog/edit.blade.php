@extends('layouts.master')

@section('title', 'Belajar Laravel!')

@section('content')
  <h4>Selamat datang kembali</h4>

  <form action="/belajar/public/blog/{{$blog->id}}" method="post">
    <input type="text" name="title" value="{{$blog->title}}"><br><br>
    <textarea type="text" name="description">{{ $blog->description }}</textarea><br>
    <input type="submit" name="sumit" value="edit">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">
  </form>
@endsection
