@extends('layouts.master')
@section('title', 'Belajar Laravel!')
@section('content')
  <h1>Selamat datang di Blog saya</h1>
  <hr>
  @foreach($blogs as $blog)
<li>
  <a href="blog/{{ $blog->id }}">{{ $blog->title }}</a>
  <form action="blog/{{$blog->id}}" method="post">

    <input type="submit" name="sumit" value="delete">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
  </form>
</li>
  @endforeach
@endsection
