@extends('Auth.AuthTemplate')

@section('title', 'Login')

@section('content')
  <div class="max-w-80 w-80">
    <h1 class="text-3xl font-semibold text-violet-500 mb-3 text-center">Login</h1>
    <form action="" method="post" class="flex flex-col">
      @csrf
      <label for="username" class="font-medium text-lg mb-1">Username</label>
      <input placeholder="Masukkan Username" type="text" id="username" class="border rounded-md text-sm px-2 py-2 invalid:border-red-500 focus:outline-4 focus:outline-violet-300 mb-5">

      <label for="password" class="font-medium text-lg mb-1">Password</label>
      <div class="relative">
        <input placeholder="Masukkan Password" type="password" id="password" class="w-[100%] border rounded-md text-sm px-2 py-2 invalid:border-red-500 focus:outline-4 focus:outline-violet-300 mb-5">
        <img id="password-eye" class="absolute w-6 right-2 bottom-7" src="/img/eye.svg" alt="">
      </div>

      <div class="grid place-items-center">
        <button type="submit" class="bg-violet-500 rounded-lg font-medium text-white px-8 py-2 shadow-sm cursor-pointer hover:bg-violet-600 focus:outline-2 focus:outline-violet-400">Login</button>
      </div>

      <p class="mt-4 text-center text-sm">Belum memiliki akun? <a href="{{ route('signup') }}" class="underline text-blue-800">Daftar</a></p>
    </form>
  </div>
@endsection