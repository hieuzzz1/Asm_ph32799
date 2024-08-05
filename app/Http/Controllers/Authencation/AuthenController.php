<?php

namespace App\Http\Controllers\Authencation;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;

class AuthenController extends Controller
{

    public function showFormLogin()
    {
        $data = Post::all();
        $dataCate = Category::all();
        return view('client.auth.login', compact('data', 'dataCate'));
    }

    public function handleLogin()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            /**
             * @var User
             */
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('client.admin.index');
            }
            return redirect()->route('client.member.home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showFormRegister()
    {
        $data = Post::all();
        $dataCate = Category::all();
        return view('client.auth.register', compact('data', 'dataCate'));
    }

    public function handleRegister()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create($data);
        Auth::login($user);
        request()->session()->regenerate();
        return redirect('/');
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerate();
        return redirect()->route('login');
    }

    public function forgotPassword()
    {
        $dataCate = Category::all();
        return view('client.member.forgot', compact('dataCate'));
    }

    public function handleforgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function getPassword($token)
    {
        $dataCate = Category::all();
        return view('client.member.reset', ['token' => $token, 'dataCate' => $dataCate]);
    }

    public function handleGetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();

                Auth::login($user);
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect('/')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
