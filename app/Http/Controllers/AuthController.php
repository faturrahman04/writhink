<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class AuthController extends Controller
{
  public function login() :View
  {
    return view('components.login');
  }

  public function registrasi() :View
  {
    return view('components.registrasi');
  }

  public function store(Request $request): RedirectResponse
  {
    $validation = $request->validate([
      'username' => 'required|unique:users|max:255|min:2',
      'email'    => 'required|email:rfc,dns',
      'password' => ['required', 'confirmed', Password::min(8)->numbers()->symbols()]
    ]);

    return redirect('signin');
  }
}
