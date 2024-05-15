@extends('layouts.user-layout')

@section("content")
    <div class="flex justify-center flex-col gap-10 lg:gap-14 md:gap-40 h-full">
        <div id="foto_profile" class="mx-auto absolute w-40 h-40 top-28 left-1/2 right-1/2 translate-x-[-50%]  flex justify-center rounded-full">
            <div class="blur-md"></div>
            <img src="{{ asset('assets/images/alvan-nee-ZCHj_2lJP00-unsplash.jpg') }}" alt="" class="object-cover h-30 w-40 max-h-30 max-w-40 rounded-full border-4 border-white border-b-2">
        </div>
        <div class="flex justify-center ">
            <h1 class="text-black text-4xl flex mt-20 "> {{ $nama }}</h1>
        </div>
        <div class="flex justify-center text-center text-base md:text-xl">
            <p>Tambal Ban Online: Perbaikan Ban Langsung ke Lokasi Anda!</p>
        </div>
        <div class="flex justify-center w-full h-16 md:h-20 lg:h-14 mt-16  ">
            <a href="{{ route('order-pilih-kendaraan') }}" class="bg-[#FF802A] text-center lg:w-1/4 xl:w-1/4 w-3/4 h-full justify-center flex flex-col px-10 py-6 rounded-lg text-white xl:border-none lg:border-none border-none hover:bg-[#f78000d6] shadow-lg md:text-xl"><b>Pesan Sekarang</b> </a>
        </div>
        <div class="w-full bg-[#FF802A] h-14 flex justify-center mx-auto content-center rounded-lg drop-shadow-lg gap-6">
            <div>
                <img src="{{ asset('assets/images/voucher.svg') }}" alt="voucher">
            </div>
            <div>
                <img src="{{ asset('assets/images/alvan-nee-ZCHj_2lJP00-unsplash.jpg') }}" alt="" class=" w-10 h-10 rounded-full">
            </div>
            <div>
                <img src="{{asset('assets/images/logout.svg')}}" alt="logout">
                </div>
        </div>
        <div></div>
    </div>
@endsection
