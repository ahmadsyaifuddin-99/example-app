<!DOCTYPE html>
@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3> {{ $name }} </h3>
    <p> <?= $email ?> </p>
@endsection
