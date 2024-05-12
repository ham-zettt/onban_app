@extends('layouts.user-layout')

@section("content")
    <div id="foto_profile" class="mx-auto absolute w-40 h-40 top-20 left-1/2 right-1/2 translate-x-[-50%]  flex justify-center rounded-full">
        <img src="{{ asset('assets/images/alvan-nee-ZCHj_2lJP00-unsplash.jpg') }}" alt="" class="object-cover h-30 w-40 max-h-30 max-w-40 rounded-full">
    </div>
    <p>{{ $nama }}</p>
    <p>{{ $role }}</p>
@endsection
