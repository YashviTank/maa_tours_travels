<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session()->has('admin_logged_in') && session('admin_logged_in') === true) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = AdminUser::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session([
                'admin_logged_in' => true,
                'admin_id' => $admin->id,
                'admin_username' => $admin->username,
                'admin_email' => $admin->email,
            ]);

            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['error' => 'Invalid username or password'])->withInput();
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.login');
    }
}
