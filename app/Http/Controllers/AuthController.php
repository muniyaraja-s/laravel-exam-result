<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller {

    public function index(Request $request) {
        // return view('login.index');
        $dashboard = Dashboard::where('exam_date', 'LIKE', '%' . $request->exam_date . '%')->get();
        return view('index', compact('dashboard'));
    }

    public function homeindex() {
        return view('login.index');
    }

    public function frontLogin() {
        return view('login.index');
    }

    public function register() {
        return view('register.index');
    }

    public function doRegister(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        toastr()->success('Register successfully');
        return redirect('/');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                toastr()->error('Incorrect Password');
                return redirect()->back();
            }

            if (Auth::attempt($credentials)) {
                return redirect('/dashboard');
            }
        } else {
            toastr()->error('Invalid credentials');
            return redirect()->back();
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
