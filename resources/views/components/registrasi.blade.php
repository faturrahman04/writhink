@extends('Auth.AuthTemplate')

@section('title', 'Registrasi')

@section('content')
  <div class="max-w-80 w-80">
    <h1 class="text-3xl font-semibold text-violet-500 mb-3 text-center">Registrasi</h1>
    <form action="/signup/user" method="POST" class="flex flex-col">
      @csrf
      <label for="username" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Username</label>
      <div class="relative">
        <input name="username" placeholder="Masukkan Username" type="text" id="username" value="{{ old('username') }}" class="border w-full rounded-md text-sm px-2 py-2 focus:outline-4 focus:outline-violet-300 mb-5 invalid:border-pink-500 @error('username') border-pink-500 outline-pink-500 @enderror">
        @error('username')
          <div class="absolute bottom-1 text-xs text-pink-500">{{ $message }}</div>
        @enderror
      </div>
      

      <label for="email" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Email</label>
      <div class="relative">
        <input name="email" placeholder="Masukkan Email" type="email" id="email" value="{{ old('email') }}" class="border w-full rounded-md text-sm px-2 py-2 invalid:border-pink-500 focus:outline-4 focus:outline-violet-300 mb-5 @error('email') border-pink-500 outline-pink-500 @enderror">
        @error('email')
          <div class="absolute bottom-1 text-xs text-pink-500">{{ $message }}</div>
        @enderror
      </div>

      <label for="password" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Password</label>
      <div class="relative">
        <input name="password" placeholder="Masukkan Password" type="password" id="password" class="w-[100%] border rounded-md text-sm px-2 py-2 invalid:pink-red-500 focus:outline-4 focus:outline-violet-300 mb-5 @error('password') border-pink-500 outline-pink-500 @enderror">
        <img id="password-eye" class="absolute w-6 right-2 bottom-7" src="/img/eye.svg" alt="">
        @error('password')
          <div class="absolute bottom-1 text-xs text-pink-500">{{ $message }}</div>
        @enderror
      </div>

      <label for="confirm-password" class="font-medium text-lg mb-1 after:ml-0.5 after:text-red-500 after:content-['*']">Konfirmasi Password</label>
      <div class="relative">
        <input name="password_confirmation" placeholder="Konfirmasi Password" type="password" id="confirm-password" class="w-[100%] border rounded-md text-sm px-2 py-2 invalid:border-pink-500 focus:outline-4 focus:outline-violet-300 mb-5 @error('password') border-pink-500 outline-pink-500 @enderror"">
        <img id="confirm-password-eye" class="absolute w-6 right-2 bottom-7" src="/img/eye.svg" alt="">
        @error('password')
          <div class="absolute bottom-1 text-xs text-pink-500">{{ $message }}</div>
        @enderror
      </div>

      <div class="grid place-items-center">
        <button type="submit" class="bg-violet-500 rounded-lg font-medium text-white px-8 py-2 shadow-sm cursor-pointer hover:bg-violet-600 focus:outline-2 focus:outline-violet-400">Daftar</button>
      </div>

      <p class="mt-4 text-center text-sm">Sudah memiliki akun? <a href="{{ route('signin') }}" class="underline text-blue-800">Login</a></p>
    </form>
  </div>
@endsection

@section('script')
  <script>
    const passwordEye = document.getElementById('password-eye');
    const password = document.querySelector('input[name="password"]');
    const confirmPasswordEye = document.getElementById('confirm-password-eye');
    const passwordConfirmed = document.querySelector('input[name="password_confirmation"]');

    passwordEye.addEventListener('click', function() {
      password.type = password.type == 'password' ? 'text' : 'password'
    });

    confirmPasswordEye.addEventListener('click', function() {
      passwordConfirmed.type = passwordConfirmed.type == 'password' ? 'text' : 'password'
    })
  </script>
@endsection