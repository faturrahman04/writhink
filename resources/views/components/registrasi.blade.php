@extends('Auth.AuthTemplate')

@section('title', 'Registrasi')

@section('content')
  <div class="max-w-80 w-80">
    <h1 class="text-3xl font-semibold text-violet-500 mb-3 text-center">Registrasi</h1>
    <form action="" method="post" class="flex flex-col">
      @csrf
      <label for="username" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Username</label>
      <input name="username" placeholder="Masukkan Username" type="text" id="username" class="border rounded-md text-sm px-2 py-2 invalid:border-red-500 focus:outline-4 focus:outline-violet-300 mb-5">

      <label for="email" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Email</label>
      <input name="email" placeholder="Masukkan Email" type="email" id="email" class="border rounded-md text-sm px-2 py-2 invalid:border-red-500 focus:outline-4 focus:outline-violet-300 mb-5">

      <label for="password" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Password</label>
      <div class="relative">
        <input name="password" placeholder="Masukkan Password" type="password" id="password" class="w-[100%] border rounded-md text-sm px-2 py-2 invalid:border-red-500 focus:outline-4 focus:outline-violet-300 mb-5">
        <img id="password-eye" class="absolute w-6 right-2 bottom-7" src="/img/eye.svg" alt="">
      </div>

      <label for="confirm-password" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Konfirmasi Password</label>
      <div class="relative">
        <input name="password_confirmation" placeholder="Konfirmasi Password" type="password" id="confirm-password" class="w-[100%] border rounded-md text-sm px-2 py-2 invalid:border-red-500 focus:outline-4 focus:outline-violet-300 mb-5">
        <img id="confirm-password-eye" class="absolute w-6 right-2 bottom-7" src="/img/eye.svg" alt="">
      </div>

      <div class="grid place-items-center">
        <button type="submit" class="bg-violet-500 rounded-lg font-medium text-white px-8 py-2 shadow-sm cursor-pointer hover:bg-violet-600 focus:outline-2 focus:outline-violet-400">Daftar</button>
      </div>

      <p class="mt-4 text-center text-sm">Sudah memiliki akun? <a href="{{ route('signin') }}" class="underline text-blue-800">Login</a></p>
    </form>
  </div>
@endsection