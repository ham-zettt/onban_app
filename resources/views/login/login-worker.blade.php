@extends('layouts.form-dark-layout')
@section('content')
    <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">Login Worker</h1>
    @if (session()->has('success'))
        <div class="text-white">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="bg-red-500 text-white p-3 rounded-lg text-center">
            {{ session()->get('error') }}
        </div>
    @endif

    <form class="max-w-md mx-auto" method="post" action="{{ route('login-worker') }}">
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="username" id="username"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-primary focus:outline-none focus:ring-0 focus:border-primary peer"
                placeholder=" " required />
            <label for="username"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-primary peer-focus:dark:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password" id="password"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-primary focus:outline-none focus:ring-0 focus:border-primary peer"
                placeholder=" " required />
            <label for="password"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-primary peer-focus:dark:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>
        <button type="submit"
            class="text-secondary text-md bg-white hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
            <span
                class="absolute text-[12px] px-3 font-medium text-white -translate-x-1/2 bg-secondary left-1/2 dark:text-white dark:bg-gray-900">Belum
                Punya Akun?</span>
        </div>
        <a href="{{ route('register-worker') }}"
            class=" text-secondary text-md bg-white hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</a>
    </form>
@endsection
