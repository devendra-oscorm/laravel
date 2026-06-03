<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Views
    |--------------------------------------------------------------------------
    */

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function showAdminLogin()
    {
        return view('auth.admin-login');
    }

    public function showAdminRegister()
    {
        return view('auth.admin-register');
    }

    /*
    |--------------------------------------------------------------------------
    | User Login
    |--------------------------------------------------------------------------
    */

   public function userLogin(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::guard('web')->attempt($credentials)) {

        $request->session()->regenerate();

        return redirect('/')
            ->with('success', 'Login successful');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

    /*
    |--------------------------------------------------------------------------
    | Admin Login
    |--------------------------------------------------------------------------
    */

    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->remember)) {

            $request->session()->regenerate();

            if (Auth::user()->role !== 'admin') {

                Auth::logout();

                return back()->withErrors([
                    'email' => 'You are not authorized as admin.'
                ]);
            }

            return redirect('/admin/blogs');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.'
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | User Register
    |--------------------------------------------------------------------------
    */

    public function userRegister(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
        ]);

        Auth::login($user);

        return redirect('/');
    }

    /*
    |--------------------------------------------------------------------------
    | Admin Register
    |--------------------------------------------------------------------------
    */

    public function adminRegister(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'admin',
        ]);

        Auth::login($user);

        return redirect('/admin/blogs');
    }

    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}