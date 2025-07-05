<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class AuthController extends Controller
{
  public function signin() :View
  {
    return view('components.login');
  }

  public function registrasi() :View
  {
    return view('components.registrasi');
  }

  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'username' => 'required|unique:users|max:255|min:2',
      'email'    => 'required|email:rfc,dns|unique:users',
      'password' => ['required', 'confirmed', Password::min(8)->numbers()->symbols()]
    ]);

    User::create([
      'username' => $request->username,
      'email'    => $request->email,
      'password' => Hash::make($request->password)
    ]);

    return redirect()->route('signin');
  }

  public function verify(Request $request): RedirectResponse
  {
    $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    $user = User::where('username', $request->username)->first();

    if ($user && Hash::check($request->password, $user->password)) {
      Auth::login($user);
      return redirect()->route('dashboard');
    } else {
      return redirect()->back()->with('alert', 'Username atau password salah');
    }
  }

}
