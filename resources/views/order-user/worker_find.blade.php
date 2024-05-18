@extends('layouts.user-layout')
@section('content')
    <div class="w-full h-full py-20 flex flex-col ">
        <div class="w-3/4 absolute top-24 left-1/2 max-h-28 translate-x-[-50%] rounded-md">
            <iframe class="w-full rounded-md"
                src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3958.99244912095!2d112.72446952527069!3d-7.126868819896727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x2dd803dd886bbff5%3A0x9777ca139b28195d!2sUniversitas%20Trunojoyo%20Madura%2C%20Jalan%20Raya%20Telang%2C%20Perumahan%20Telang%20Inda%2C%20Telang%2C%20Kabupaten%20Bangkalan%2C%20Jawa%20Timur!3m2!1d-7.1277548!2d112.7230807!4m5!1s0x2dd803776abcad21%3A0xf6fd2f48854b142e!2sKos%20Putri%20%26%20Opelika%20Laundry%2C%20Telang%20Timur%2C%20Telang%2C%20Kabupaten%20Bangkalan%2C%20Jawa%20Timur!3m2!1d-7.1281514999999995!2d112.7309164!5e0!3m2!1sid!2sid!4v1715926902722!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        {{-- <div class="w-3/4 h-40 flex flex-col mt-72 mx-auto gap-2 ">
            <div class="w-full h-1/4 flex gap-2">
                <div class="bg-red-500 w-1/4 h-full rounded-lg"></div>
                <div class="bg-red-900 w-1/4 h-full rounded-lg"></div>
                <div class="bg-red-500 w-1/4 h-full rounded-lg"></div>
                <div class="bg-red-900 w-1/4 h-full rounded-lg"></div>
            </div>
            <div class=" w-full rounded-lg h-3/4 flex bg-red-600">

            </div>
        </div> --}}
        <div class="w-full mx-auto h-56 bg-primary mt-80 rounded-md flex">
            <div class="w-1/3 h-full bg-black ">
            </div>
            <div class="w-1/3 h-full bg-black ">
            </div>
            <div class="w-1/3 h-full bg-black ">
            </div>
            
        </div>
    </div>
@endsection
