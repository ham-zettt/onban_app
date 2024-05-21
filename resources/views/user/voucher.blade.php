@extends('layouts.user-layout')
@section('content')
    <h1
        class="text-center text-2xl font-bold text-white mx-auto absolute w-3/4 h-40 top-28 left-1/2 right-1/2 translate-x-[-50%] ">
        Voucher </h1>
    <div class="flex-col flex gap-3 lg:w-2/3  lg:mx-auto">
        <div class="w-full bg-white rounded-lg 800 h-full flex flex-col text-sm shadow-lg" x-data="{ open: false }">
            <div x-on:click="open = ! open" class="lg:gap-52 w-full flex md:gap-36 md:p-4 ">
                <div class="flex flex-col w-1/2 p-2  rounded-md ">
                    <p class="font-semibold text-primary">Voucher diskon</p>
                    <p class="font-semibold text-black text-2xl">20%</p>
                    <p class="text-red-500 opacity-55 mt-2">exp : 2 hari</p>
                </div>
                <div class="flex content-center my-auto text-secondary lg:ml-20">
                    <p class="mt-2.5">minimal jarak 10km</p>
                    <div class="text-gray-500 font-light ">
                        <x-ri-arrow-right-s-line class="w-10 my-auto " />
                    </div>
                </div>
            </div>
            <div x-show="open" x-transition class="flex flex-col mx-auto p-2 md:ml-2 ">
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Masa Berlaku</p>
                    <p class="text-gray-500">28 Mei 2024 00:00 - 30 Mei 2024 23:59</p>
                </div>
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Syarat Penggunaan</p>
                    <p class="text-gray-500">Voucher ini hanya dapat digunakan jika jarak anda dengan worker sejauh minimal
                        10km</p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white rounded-lg 800 h-full flex flex-col text-sm shadow-lg" x-data="{ open: false }">
            <div x-on:click="open = ! open" class="lg:gap-52 w-full flex md:gap-36 md:p-4">
                <div class="flex flex-col w-1/2 p-2  rounded-md ">
                    <p class="font-semibold text-primary">Voucher diskon</p>
                    <p class="font-semibold text-black text-2xl">20%</p>
                    <p class="text-red-500 opacity-55 mt-2">exp : 2 hari</p>
                </div>
                <div class="flex content-center my-auto text-secondary lg:ml-20">
                    <p class="mt-2.5">minimal jarak 10km</p>
                    <div class="text-gray-500 font-light ">
                        <x-ri-arrow-right-s-line class="w-10 my-auto " />
                    </div>
                </div>
            </div>
            <div x-show="open" x-transition class="flex flex-col mx-auto p-2 md:ml-2 ">
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Masa Berlaku</p>
                    <p class="text-gray-500">28 Mei 2024 00:00 - 30 Mei 2024 23:59</p>
                </div>
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Syarat Penggunaan</p>
                    <p class="text-gray-500">Voucher ini hanya dapat digunakan jika jarak anda dengan worker sejauh minimal
                        10km</p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white rounded-lg 800 h-full flex flex-col text-sm shadow-lg" x-data="{ open: false }">
            <div x-on:click="open = ! open" class="lg:gap-52 w-full flex md:gap-36 md:p-4">
                <div class="flex flex-col w-1/2 p-2  rounded-md ">
                    <p class="font-semibold text-primary">Voucher diskon</p>
                    <p class="font-semibold text-black text-2xl">20%</p>
                    <p class="text-red-500 opacity-55 mt-2">exp : 2 hari</p>
                </div>
                <div class="flex content-center my-auto text-secondary lg:ml-20">
                    <p class="mt-2.5">minimal jarak 10km</p>
                    <div class="text-gray-500 font-light ">
                        <x-ri-arrow-right-s-line class="w-10 my-auto " />
                    </div>
                </div>
            </div>
            <div x-show="open" x-transition class="flex flex-col mx-auto p-2 md:ml-2 ">
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Masa Berlaku</p>
                    <p class="text-gray-500">28 Mei 2024 00:00 - 30 Mei 2024 23:59</p>
                </div>
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Syarat Penggunaan</p>
                    <p class="text-gray-500">Voucher ini hanya dapat digunakan jika jarak anda dengan worker sejauh minimal
                        10km</p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white rounded-lg 800 h-full flex flex-col text-sm shadow-lg" x-data="{ open: false }">
            <div x-on:click="open = ! open" class="lg:gap-52 w-full flex md:gap-36 md:p-4">
                <div class="flex flex-col w-1/2 p-2  rounded-md ">
                    <p class="font-semibold text-primary">Voucher diskon</p>
                    <p class="font-semibold text-black text-2xl">20%</p>
                    <p class="text-red-500 opacity-55 mt-2">exp : 2 hari</p>
                </div>
                <div class="flex content-center my-auto text-secondary lg:ml-20">
                    <p class="mt-2.5">minimal jarak 10km</p>
                    <div class="text-gray-500 font-light ">
                        <x-ri-arrow-right-s-line class="w-10 my-auto " />
                    </div>
                </div>
            </div>
            <div x-show="open" x-transition class="flex flex-col mx-auto p-2 md:ml-2 ">
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Masa Berlaku</p>
                    <p class="text-gray-500">28 Mei 2024 00:00 - 30 Mei 2024 23:59</p>
                </div>
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Syarat Penggunaan</p>
                    <p class="text-gray-500">Voucher ini hanya dapat digunakan jika jarak anda dengan worker sejauh minimal
                        10km</p>
                </div>
            </div>
        </div>
        <div class="w-full bg-white rounded-lg 800 h-full flex flex-col text-sm shadow-lg" x-data="{ open: false }">
            <div x-on:click="open = ! open" class="lg:gap-52 w-full flex md:gap-36 md:p-4">
                <div class="flex flex-col w-1/2 p-2  rounded-md ">
                    <p class="font-semibold text-primary">Voucher diskon</p>
                    <p class="font-semibold text-black text-2xl">20%</p>
                    <p class="text-red-500 opacity-55 mt-2">exp : 2 hari</p>
                </div>
                <div class="flex content-center my-auto text-secondary lg:ml-20">
                    <p class="mt-2.5">minimal jarak 10km</p>
                    <div class="text-gray-500 font-light ">
                        <x-ri-arrow-right-s-line class="w-10 my-auto " />
                    </div>
                </div>
            </div>
            <div x-show="open" x-transition class="flex flex-col mx-auto p-2 md:ml-2 ">
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Masa Berlaku</p>
                    <p class="text-gray-500">28 Mei 2024 00:00 - 30 Mei 2024 23:59</p>
                </div>
                <div class="flex flex-col p-2 ">
                    <p class="font-semibold ">Syarat Penggunaan</p>
                    <p class="text-gray-500">Voucher ini hanya dapat digunakan jika jarak anda dengan worker sejauh minimal
                        10km</p>
                </div>
            </div>
        </div>
    </div>

    {{-- navigation bar --}}

    <div class=" w-full md:w-2/4 mt-4 bg-[#FF802A] h-16 flex justify-center mx-auto my-auto content-center rounded-lg drop-shadow-lg lg:w-2/5 sticky bottom-10"
        id='footbar'>
        <div class="flex w-full h-2/3 justify-center mx-auto content-center lg:gap-32 gap-20 my-auto">
            <div class="w-14  text-white  h-full  text-center flex flex-col justify-center ">
                <a href="{{ route('voucher') }}">
                    <img class="w-2/3 mx-auto h-2/3" src="{{ asset('assets/images/voucher.svg') }}" alt="voucher">
                    <p class="text-sm">Voucher</p>
                </a>
            </div>
            <a href="{{ route('profile') }}"
                class="w-auto  text-white  h-3/4 my-auto  text-center flex flex-col justify-center  ">
                <img src="{{ asset('assets/images/alvan-nee-ZCHj_2lJP00-unsplash.jpg') }}" alt=""
                    class=" w-full h-full rounded-full">
                <p class="text-sm">Akun</p>
            </a>
            <div class="w-14  text-white  h-full  text-center flex flex-col justify-center ">
                <a href="{{ route('logout') }}" id="logout"
                    class="w-14 text-white  h-full  text-center flex flex-col justify-center ">
                    <img class="w-3/4 h-3/4" src="{{ asset('assets/images/logout.svg') }}" id="imgLogout"
                        alt="logout">
                    <p class="text-sm">Logout</p>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{-- hide navigation bar when scrolling --}}
    <script>
        const footbar = document.querySelector('#footbar');
        let isScrolling;
        window.addEventListener('scroll', () => {
            clearTimeout(isScrolling);
            footbar.style.display = 'none';

            isScrolling = setTimeout(() => {
                footbar.style.display = 'block';
            }, 500); // Ganti angka ini untuk mengatur waktu delay setelah scrolling berhenti
        });


        // pop up when logout
        document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault();
            const hrefValue = event.currentTarget.href;
            Swal.fire({
                title: 'Logout?',
                text: 'Apakah Anda yakin ingin logout?',
                icon: 'warning',
                showCancelButton: true,
                dangerMode: true,
                confirmButtonText: 'Ya!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {

                    window.location.href = hrefValue;
                }
            });
        });
    </script>
@endsection
