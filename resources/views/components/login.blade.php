@extends('Auth.AuthTemplate')

@section('title', 'Login')

@section('content')
  <div class="max-w-80 w-80">
    @if (session('alert'))
      <div class="border-2 border-pink-400 bg-pink-500 text-center py-3 rounded-md mb-3 text-white font-medium">{{ session('alert') }}</div>
    @endif

    <h1 class="text-3xl font-semibold text-violet-500 mb-3 text-center">Login</h1>
    <form action="/login/user" method="POST" class="flex flex-col">
      @csrf
      <label for="username" class="font-medium text-lg mb-1">Username</label>
      <div class="relative">
        <input placeholder="Masukkan Username" value="{{ old('username') }}" type="text" name="username" id="username" class="border w-full rounded-md text-sm px-2 py-2 invalid:border-pink-500 focus:outline-4 focus:outline-violet-300 mb-5 @error('username') border-pink-500 @enderror">
        @error('username')
          <div class="absolute bottom-1 text-xs text-pink-500">{{ $message }}</div>
        @enderror
      </div>

      <label for="password" class="font-medium text-lg mb-1">Password</label>
      <div class="relative">
        <input placeholder="Masukkan Password" name="password" type="password" id="password" class="w-[100%] border rounded-md text-sm px-2 py-2 invalid:border-pink-500 focus:outline-4 focus:outline-violet-300 mb-5 @error('password') border-pink-500 @enderror">
        <img id="password-eye" class="absolute w-6 right-2 bottom-7" src="/img/eye.svg" alt="">
        @error('password')
          <div class="absolute bottom-1 text-xs text-pink-500">{{ $message }}</div>
        @enderror
      </div>

      <div class="grid place-items-center">
        <button type="submit" class="bg-violet-500 rounded-lg font-medium text-white px-8 py-2 shadow-sm cursor-pointer hover:bg-violet-600 focus:outline-2 focus:outline-violet-400">Login</button>
      </div>

      <p class="mt-4 text-center text-sm">Belum memiliki akun? <a href="{{ route('signup') }}" class="underline text-blue-800">Daftar</a></p>
    </form>
  </div>
@endsection

@section('script')
  <script>
    const passwordEye = document.getElementById('password-eye');
    const password = document.querySelector('input[name="password"]');

    passwordEye.addEventListener('click', function() {
      password.type = password.type == 'password' ? 'text' : 'password'
    });
  </script>
@endsection