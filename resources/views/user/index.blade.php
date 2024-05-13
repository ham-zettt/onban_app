@extends('layouts.user-layout')

@section("content")
    <div class="flex justify-center flex-col">
        <div id="foto_profile" class="mx-auto absolute w-40 h-40 top-28 left-1/2 right-1/2 translate-x-[-50%]  flex justify-center rounded-full">
            <img src="{{ asset('assets/images/alvan-nee-ZCHj_2lJP00-unsplash.jpg') }}" alt="" class="object-cover h-30 w-40 max-h-30 max-w-40 rounded-full">
        </div>
        <div class="flex justify-center mt-4">
            <h1 class="text-black text-4xl"> {{ $nama }}</h1>
        </div>
        <div class="flex justify-center text-center mt-20">
            <p>Tambal Ban Online: Perbaikan Ban Langsung ke Lokasi Anda!</p>
        </div>
        <div class="flex justify-center w-full h-14 mt-16 ">
            <a href="#" class="bg-[#F77F00] justify-center flex flex-col px-10 py-6 rounded-lg text-white xl:border-none lg:border-none border-none hover:px-12 hover:py-8 shadow-lg"><b>Pesan Sekarang</b> </a>
        </div>
    </div>
    {{-- <p>{{ $role }}</p> --}}
@endsection
