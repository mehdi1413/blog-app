<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    // Register Or Create Users
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'confirmed',
                'unique:users',
                Password::min(8)->max(16)->mixedCase()->letters()->numbers()->symbols()
            ]
        ],
            [
                'name.required' => 'نام و نام خانوادگی الزامی است.',
                'name.max' => 'طول فیلد نام و نام خانوادگی نباید بیشتر از ۲۵۵ کاراکتر باشد.',
                'name.min' => 'طول فیلد نام و نام خانوادگی نباید کمتر از ۵ کاراکتر باشد.',
                'email.required' => 'ایمیل الزامی است.',
                'email.max' => 'ایمیل شما نباید بیشتر از ۲۵۵ کاراکتر باشد.',
                'email.email' => 'ایمیل معتبر وارد کنید.',
                'email.unique' => 'ایمیل باید منحصر به فرد باشد.',
                'password.required' => 'پسورد الزامی است.',
                'password.confirmed' => 'فیلد تأیید رمز عبور مطابقت ندارد.',
                'password.min' => 'حداقل ۸ کاراکتر باید وارد کنید.',
                'password.max' => 'حداکثر ۱۶ کاراکتر میتوانید وارد کنید.',
                'password.mixed' => 'کلمه عبور باید شامل اعداد، حروف کوچک و بزرگ و کاراکترهای ویزه (!@#$%^&*) باشد.',
            ]);
        $user = User::create($data);
        Auth::login($user);

        //Send mail

        // Redirect
        return redirect()->route('home')->withErrors([
            'successLogin' => auth()->user()->name . ' عزیز خوش آمدید.'
        ]);
    }
}
