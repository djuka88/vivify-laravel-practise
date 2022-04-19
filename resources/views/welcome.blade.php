@extends('layouts.app')

@section('title', "Welcome $first_name")

@section('content')
    <p>Hello, {{$first_name}}!</p>
@endsection 