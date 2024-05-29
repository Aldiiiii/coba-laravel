@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>

    <h3>{{ $name }}</h3>
    <p><?= $email ?></p>
    <img style="width: auto; height:300px"  src="img/{{ $image }}">
@endsection