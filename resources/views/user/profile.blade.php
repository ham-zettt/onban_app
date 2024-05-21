@extends('layouts.user-layout')
@section('content')
    <h1
        class="text-center text-2xl font-bold text-white mx-auto absolute w-3/4 h-40 top-14 left-1/2 right-1/2 translate-x-[-50%] ">
        Profile </h1>
    <div class="absolute rounded-full top-32 mx-auto w-40 h-60 left-4 right-2/3 translate-x-[-50%] ">
        <img src="{{asset('assets/images/alvan-nee-ZCHj_2lJP00-unsplash.jpg') }}" alt="profile"
        class="w-3/4 h-1/2 rounded-full">
    </div>
@endsection

@section('js')
@endsection
