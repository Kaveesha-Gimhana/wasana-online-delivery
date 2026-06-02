<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Show admin login page
     */
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * Handle admin login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();

            // Check admin role
            if ($user && $user->role === 'admin') {

                return redirect()->route('admin.dashboard')
                    ->with('success', 'Welcome Admin!');
            }

            // If not admin → logout
            Auth::logout();

            return back()->with('error', 'Access denied: Admins only');
        }

        return back()->with('error', 'Invalid email or password');
    }

    /**
     * Admin dashboard
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Admin logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('success', 'Logged out successfully');
    }
}