<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\UpdateEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->only('name', 'city', 'email', 'password', 'mobile');
        $input['role'] = 'user';
        $input['password'] = Hash::make($input['password']);

        User::create($input);

        return redirect("login")->withSuccess('User registered successfully!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('user-home');
        }

        return redirect("login")->withSuccess('Please enter valid credentials!');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required']);

        $user = User::where('email',$request->email)->first();
        if(!empty($user)){
            $token = ['reset_token' => rand(1000, 9999)];
            $res = User::where('id',$user['id'])->update($token);
            $data = User::where('id',$user['id'])->first();

            try {
                Mail::to($request->email)->send(new ForgotPassword($data));
            }  catch (\Exception $e) {
                Log::info($e);
            }

            return redirect('enterOTP');
        }
        return back()->withSuccess('No user with given address!');
    }

    public function resetPassword(Request $request)
    {
        $otp = $request->otp;
        $user = User::where('reset_token', $otp)->first();
        if (!empty($user)) {
            return view('login/reset-password', compact('otp'));
        }
        return back()->withSuccess('Enter valid OTP');
    }

    public function postResetPassword(Request $request)
    {

        $user = User::where('reset_token', $request->otp)->first();
        if (!empty($user)) {
            $data_to_update = ['password' => bcrypt($request->new_password), 'reset_token' => null];
            $res = User::where('id',$user['id'])->update($data_to_update);
        }
        return redirect('login');
    }

    public function updateEmailOtp(Request $request)
    {
        $authUser = Auth::user();
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (empty($user)) {
            $token = ['reset_token' => rand(1000, 9999)];
            $res = User::where('id',$authUser['id'])->update($token);
            $data = User::where('id',$authUser['id'])->first();

            try {
                Mail::to($request->email)->send(new UpdateEmail($data));
            }  catch (\Exception $e) {
                Log::info($e);
            }
            return view('login/updateemailOTP', compact('email'));
        }
        return back()->withSuccess('User with this email already exist!');
    }

    public function updateEmail(Request $request)
    {
        $otp = $request->otp;
        $email = $request->email;
        $user = Auth::user();
        if ($user->reset_token == $otp) {
            $user->email = $email;
            $user->save();

            return redirect('user-profile')->withSuccess('Email changed successfully!');
        }
        $message = "Invalid OTP";
        return view('login/updateemailOTP', compact('email', 'message'));
    }

    public function updatePassword(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();

        if (Hash::check($input['password'], $user->password)) {
            $user->password = Hash::make($input['password']);
            $user->save();

            return redirect('user-profile')->withSuccess('Password changed successfully!');
        }
        return back()->withSuccess('Current password is wrong!');
    }
}
