<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\UpdateEmail;
use App\Models\Area;
use App\Models\City;
use App\Models\User;
use Database\Seeders\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use phpDocumentor\Reflection\Types\Null_;
use PDF;

class AuthController extends Controller
{
    public function getUserData(Request $request)
    {
            $data = User::where('role','user');
            if (isset($request->search) && $request->search) {
                $data->where('name', 'like' ,'%'.$request->search.'%');
            }
            $data = $data->get();

            return view("/admin/user/admin-user-details",compact('data'));
    }

    public function deleteUserData($id)
    {
        user::find($id)->delete();
        return redirect('admin-user-details');
    }

    public function getManagerData(Request $request)
    {
            $data = User::where('role','manager');
            if (isset($request->search) && $request->search) {
                $data->where('name', 'like' ,'%'.$request->search.'%');
            }
            $data = $data->get();
            return view("/admin/manager/admin-manager-details",compact('data'));
    }

    public function deleteManagerData($id)
    {
        user::find($id)->delete();
        return redirect('admin-manager-details');
    }

    public function getDeliveryBoyData(Request $request)
    {
            $data = user::where('role','delivery-boy');
            if (isset($request->search) && $request->search) {
                $data->where('name', 'like' ,'%'.$request->search.'%');
            }
            $data = $data->get();
            return view("/admin/d-boy/admin-deliveryboy-details",compact('data'));
    }

    public function deleteDeliveryBoyData($id)
    {
        user::find($id)->delete();
        return redirect('admin-deliveryboy-details');
    }


   // export data as a pdf
    public function exportUserDetails()
    {
        $data = user::all()->where('role','user');
        $pdf = PDF::loadView('pdf.users',[
            'data'=>$data
        ]);
        return $pdf->download('users.pdf');
    }



    public function exportManagerDetails()
    {
        $data = user::all()->where('role','manager');
        $pdf = PDF::loadView('pdf.managers',[
            'data'=>$data
        ]);
        return $pdf->download('manager.pdf');
    }

    public function exportDeliveryBoyrDetails()
    {
        $data = user::all()->where('role','delivery-boy');
        $pdf = PDF::loadView('pdf.deliveryboy',[
            'data'=>$data
        ]);
        return $pdf->download('deliveryboy.pdf');
    }

    //manager delete dboy
     public function deleteDboyData($id)
    {
        user::find($id)->delete();
        return redirect('manager-deliveryboy-details');
    }



    //user-login-Signup

    public function signup(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->only('name', 'city','area', 'email', 'password', 'mobile');
        $input['role'] = 'user';
        $input['password'] = Hash::make($input['password']);

        User::create($input);

        return redirect("login")->withSuccesss('User registered successfully!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $view = '';
            if (Auth::user()->role === 'admin') {
                $view = 'admin-home';
            } elseif (Auth::user()->role === 'manager') {
                $view = 'manager-home';
            } elseif (Auth::user()->role === 'delivery-boy') {
                $view = 'deliveryboy-home';
            } else {
                $view = 'user-home';
            }
            return redirect()->intended($view);
        }

        return redirect("login")->withSuccess('Please enter valid username or Password! ');
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

            $route = '';
            if (Auth::user()->role === 'admin') {
                $route = 'admin-profile';
            } elseif (Auth::user()->role === 'manager') {
                $route = 'manager-profile';
            } elseif (Auth::user()->role === 'delivery-boy') {
                $route = 'deliveryboy-profile';
            } else {
                $route = 'user-profile';
            }
            return redirect($route)->withSuccess('Email changed successfully!');
        }
        $message = "Invalid OTP";
        return view('login/updateemailOTP', compact('email', 'message'));
    }

    public function updatePassword(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
       

        if (Hash::check($input['password'], $user->password)) {
            $user->password = Hash::make($input['new_password']);
            $user->save();
            $route = '';
            if (Auth::user()->role === 'admin') {
                $route = 'admin-profile';
            } elseif (Auth::user()->role === 'manager') {
                $route = 'manager-profile';
            } elseif (Auth::user()->role === 'delivery-boy') {
                $route = 'deliveryboy-profile';
            } else {
                $route = 'user-profile';
            }
            return redirect($route)->withSuccess('Password changed successfully!');
        }
        return back()->withSuccess('Old password is wrong!');
    }

    //admin add manager
    public function addManager(Request $request)
    {
        $user = Auth::user();

        $input = $request->only('name', 'city', 'email', 'password', 'mobile','area','pincode');
        $input['city'] = City::whereId($input['city'])->value('name');
        $input['area'] = Area::whereId($input['area'])->value('name');
        $input['role'] = 'manager';
        $input['password'] = Hash::make($input['password']);

        User::create($input);

        return back()->withSuccess('Manager Add successfully!');
    }

    //manager show dboy details
    public function getDboyData(Request $request)
    {
            $user = Auth::user();
            $city = $user->city;
            $data = User::where('role','delivery-boy' )->where('city', $city);
            if (isset($request->search) && $request->search) {
                $data->where('name', 'like' ,'%'.$request->search.'%');
            }
            $data = $data->get();

            return view("manager/manager-dboy/manager-deliveryboy-details",compact('data'));
    }
  //manager export dboy details as a pdf

    public function exportDboyDetails(Request $request)
  {
    $user = Auth::user();
    $city = $user->city;
    $data = User::where('role','delivery-boy' )->where('city', $city);
    if (isset($request->search) && $request->search) {
        $data->where('name', 'like' ,'%'.$request->search.'%');
    }
    $data = $data->get();
     $pdf = PDF::loadView('pdf.Dboydetails',[
         'data'=>$data
     ]);
     return $pdf->download('Dboydetails.pdf');
  }


    //manager add dboy
    public function addDboy(Request $request)
    {
        $user = Auth::user();

        $input = $request->only('name', 'city', 'email', 'password', 'mobile','area','pincode');
        $input['city'] = City::whereId($input['city'])->value('name');
        $input['area'] = Area::whereId($input['area'])->value('name');
        $input['role'] = 'delivery-boy';
        $input['password'] = Hash::make($input['password']);

        User::create($input);

        return back()->withSuccess('Delivery Boy Add successfully!');
    }
    //admin-login

//    public function adminLogin(Request $request)
//    {
//        $request->validate([
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//
//        $credentials = $request->only('email', 'password');
//
//        if (Auth::attempt($credentials) && Auth::user()->role == 'admin') {
//            return redirect()->intended('admin-home');
//        }
//
//        return redirect("login")->withSuccess('Please enter valid username or Password! ');
//    }
//
//    public function forgotAdminPassword(Request $request)
//    {
//        $request->validate(['email' => 'required']);
//
//        $user = User::where('email',$request->email)->first();
//        if(!empty($user)){
//            $token = ['reset_token' => rand(1000, 9999)];
//            $res = User::where('id',$user['id'])->update($token);
//            $data = User::where('id',$user['id'])->first();
//
//            try {
//                Mail::to($request->email)->send(new ForgotPassword($data));
//            }  catch (\Exception $e) {
//                Log::info($e);
//            }
//
//            return redirect('enterOTP');
//        }
//        return back()->withSuccess('No user with given address!');
//    }
//
//         public function resetAdminPassword(Request $request)
//    {
//        $otp = $request->otp;
//        $user = User::where('reset_token', $otp)->first();
//        if (!empty($user)) {
//            return view('login/reset-password', compact('otp'));
//        }
//        return back()->withSuccess('Enter valid OTP');
//    }
//
//    public function postResetAdminPassword(Request $request)
//    {
//
//        $user = User::where('reset_token', $request->otp)->first();
//        if (!empty($user)) {
//            $data_to_update = ['password' => bcrypt($request->new_password), 'reset_token' => null];
//            $res = User::where('id',$user['id'])->update($data_to_update);
//        }
//        return redirect('login');
//    }
//
//    public function updateAdminEmailOtp(Request $request)
//    {
//        $authUser = Auth::user();
//        $email = $request->email;
//        $user = User::where('email', $email)->first();
//        if (empty($user)) {
//            $token = ['reset_token' => rand(1000, 9999)];
//            $res = User::where('id',$authUser['id'])->update($token);
//            $data = User::where('id',$authUser['id'])->first();
//
//            try {
//                Mail::to($request->email)->send(new UpdateEmail($data));
//            }  catch (\Exception $e) {
//                Log::info($e);
//            }
//            return view('login/updateemailOTP', compact('email'));
//        }
//        return back()->withSuccess('User with this email already exist!');
//    }
//
//    public function updateAdminEmail(Request $request)
//    {
//        $otp = $request->otp;
//        $email = $request->email;
//        $user = Auth::user();
//        if ($user->reset_token == $otp) {
//            $user->email = $email;
//            $user->save();
//
//            return redirect('admin-profile')->withSuccess('Email changed successfully!');
//        }
//        $message = "Invalid OTP";
//        return view('login/updateemailOTP', compact('email', 'message'));
//    }
//
//    public function updateAdminPassword(Request $request)
//    {
//        $input = $request->all();
//        $user = Auth::user();
//
//        if (Hash::check($input['password'], $user->password)) {
//            $user->password = Hash::make($input['password']);
//            $user->save();
//
//            return redirect('admin-profile')->withSuccess('Password changed successfully!!!');
//        }
//        return back()->withSuccess('Old password is wrong!');
//    }
//
//    //manager-login
//
//    public function managerLogin(Request $request)
//    {
//        $request->validate([
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//
//        $credentials = $request->only('email', 'password');
//
//        if (Auth::attempt($credentials) && Auth::user()->role == "manager") {
//            return redirect()->intended('manager-home');
//        }
//
//        return redirect("login")->withSuccess('Please enter valid username or Password! ');
//    }
//
//    public function forgotManagerPassword(Request $request)
//    {
//        $request->validate(['email' => 'required']);
//
//        $user = User::where('email',$request->email)->first();
//        if(!empty($user)){
//            $token = ['reset_token' => rand(1000, 9999)];
//            $res = User::where('id',$user['id'])->update($token);
//            $data = User::where('id',$user['id'])->first();
//
//            try {
//                Mail::to($request->email)->send(new ForgotPassword($data));
//            }  catch (\Exception $e) {
//                Log::info($e);
//            }
//
//            return redirect('enterOTP');
//        }
//        return back()->withSuccess('No user with given address!');
//    }
//
//         public function resetManagerPassword(Request $request)
//    {
//        $otp = $request->otp;
//        $user = User::where('reset_token', $otp)->first();
//        if (!empty($user)) {
//            return view('login/reset-password', compact('otp'));
//        }
//        return back()->withSuccess('Enter valid OTP');
//    }
//
//    public function postResetManagerPassword(Request $request)
//    {
//
//        $user = User::where('reset_token', $request->otp)->first();
//        if (!empty($user)) {
//            $data_to_update = ['password' => bcrypt($request->new_password), 'reset_token' => null];
//            $res = User::where('id',$user['id'])->update($data_to_update);
//        }
//        return redirect('login');
//    }
//
//    public function updateManagerEmailOtp(Request $request)
//    {
//        $authUser = Auth::user();
//        $email = $request->email;
//        $user = User::where('email', $email)->first();
//        if (empty($user)) {
//            $token = ['reset_token' => rand(1000, 9999)];
//            $res = User::where('id',$authUser['id'])->update($token);
//            $data = User::where('id',$authUser['id'])->first();
//
//            try {
//                Mail::to($request->email)->send(new UpdateEmail($data));
//            }  catch (\Exception $e) {
//                Log::info($e);
//            }
//            return view('login/updateemailOTP', compact('email'));
//        }
//        return back()->withSuccess('User with this email already exist!');
//    }
//
//    public function updateManagerEmail(Request $request)
//    {
//        $otp = $request->otp;
//        $email = $request->email;
//        $user = Auth::user();
//        if ($user->reset_token == $otp) {
//            $user->email = $email;
//            $user->save();
//
//            return redirect('manager-profile')->withSuccess('Email changed successfully!');
//        }
//        $message = "Invalid OTP";
//        return view('login/updateemailOTP', compact('email', 'message'));
//    }
//
//    public function updateManagerPassword(Request $request)
//    {
//        $input = $request->all();
//        $user = Auth::user();
//
//        if (Hash::check($input['password'], $user->password)) {
//            $user->password = Hash::make($input['password']);
//            $user->save();
//
//            return redirect('manager-profile')->withSuccess('Password changed successfully!!!');
//        }
//        return back()->withSuccess('Old password is wrong!');
//    }
//
//    //Delivery-Boy Login
//
//    public function deliveryBoyLogin(Request $request)
//    {
//        $request->validate([
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//
//        $credentials = $request->only('email', 'password');
//
//        if (Auth::attempt($credentials) && Auth::user()->role == 'delivery-boy') {
//            return redirect()->intended('deliveryboy-home');
//        }
//
//        return redirect("login")->withSuccess('Please enter valid username or Password! ');
//    }
//
//    public function forgotDeliveryBoyPassword(Request $request)
//    {
//        $request->validate(['email' => 'required']);
//
//        $user = User::where('email',$request->email)->first();
//        if(!empty($user)){
//            $token = ['reset_token' => rand(1000, 9999)];
//            $res = User::where('id',$user['id'])->update($token);
//            $data = User::where('id',$user['id'])->first();
//
//            try {
//                Mail::to($request->email)->send(new ForgotPassword($data));
//            }  catch (\Exception $e) {
//                Log::info($e);
//            }
//
//            return redirect('enterOTP');
//        }
//        return back()->withSuccess('No user with given address!');
//    }
//
//         public function resetDeliveryBoyPassword(Request $request)
//    {
//        $otp = $request->otp;
//        $user = User::where('reset_token', $otp)->first();
//        if (!empty($user)) {
//            return view('login/reset-password', compact('otp'));
//        }
//        return back()->withSuccess('Enter valid OTP');
//    }
//
//    public function postResetDeliveryBoyPassword(Request $request)
//    {
//
//        $user = User::where('reset_token', $request->otp)->first();
//        if (!empty($user)) {
//            $data_to_update = ['password' => bcrypt($request->new_password), 'reset_token' => null];
//            $res = User::where('id',$user['id'])->update($data_to_update);
//        }
//        return redirect('login');
//    }
//
//    public function updateDeliveryBoyEmailOtp(Request $request)
//    {
//        $authUser = Auth::user();
//        $email = $request->email;
//        $user = User::where('email', $email)->first();
//        if (empty($user)) {
//            $token = ['reset_token' => rand(1000, 9999)];
//            $res = User::where('id',$authUser['id'])->update($token);
//            $data = User::where('id',$authUser['id'])->first();
//
//            try {
//                Mail::to($request->email)->send(new UpdateEmail($data));
//            }  catch (\Exception $e) {
//                Log::info($e);
//            }
//            return view('login/updateemailOTP', compact('email'));
//        }
//        return back()->withSuccess('User with this email already exist!');
//    }
//
//    public function updateDeliveryBoyEmail(Request $request)
//    {
//        $otp = $request->otp;
//        $email = $request->email;
//        $user = Auth::user();
//        if ($user->reset_token == $otp) {
//            $user->email = $email;
//            $user->save();
//
//            return redirect('deliveryboy-profile')->withSuccess('Email changed successfully!');
//        }
//        $message = "Invalid OTP";
//        return view('login/updateemailOTP', compact('email', 'message'));
//    }
//
//    public function updateDeliveryBoyPassword(Request $request)
//    {
//        $input = $request->all();
//        $user = Auth::user();
//
//        if (Hash::check($input['password'], $user->password)) {
//            $user->password = Hash::make($input['password']);
//            $user->save();
//
//            return redirect('deliveryboy-profile')->withSuccess('Password changed successfully!!!');
//        }
//        return back()->withSuccess('Old password is wrong!');
//    }

}
