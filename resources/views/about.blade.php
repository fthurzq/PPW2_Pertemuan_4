@extends('layout')

@section('title', 'About Page')

@section('content')
    <h1>Halaman About</h1>
    <h1><?= $name; ?></h1>
    <h1><?= $email; ?></h1>
@endsection