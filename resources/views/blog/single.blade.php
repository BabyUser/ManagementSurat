@extends('layouts.master')

@section('title', 'Belajar Laravel!')

@section('content')
  <h4>Selamat datang kembali</h4>
  <h1> {{ $blog->title }} </h1>
  <hr>
  <h2>{{ $blog->description }}</h2>
@endsection
