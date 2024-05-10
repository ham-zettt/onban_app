@extends('layouts.user-layout')

@section("content")
    {{-- <p>{{ session("userData") }}</p> --}}
    <p>{{ $nama }}</p>
    <p>{{ $role }}</p>
@endsection
