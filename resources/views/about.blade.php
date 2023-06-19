@extends('layouts.main')

@section('container')
    <h2>Halaman About</h2>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200px" class="img-thumbnail">
@endsection