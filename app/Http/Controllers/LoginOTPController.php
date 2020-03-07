<?php

namespace App\Http\Controllers;

use App\LoginOTP;
use Illuminate\Http\Request;
use App\User;
use Auth;
use DateTime;

class LoginOTPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('verifyotp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyOtp(Request $request)
    {
        $otp= $request->get('otp');

        $date = new DateTime;
        $date->modify('-5 minutes');
        $formatted_date = $date->format('Y-m-d H:i:s');
        $getOTP = LoginOTP::where('otp', $otp)->where('created_at', '>',$formatted_date)->first();

        if($getOTP){
            $user = User::where('id', $getOTP->user_id)->first();
            if ($user) {
                Auth::login($user);
                return redirect()->intended('dashboard');
            }
            else
            {
                throw ValidationException::withMessages([
                    $this->username() => [trans('auth.failed')],
                ])->redirectTo('login');
            }
        } else {
            return back()->with(['message' => 'OTP is invalid']);
        }
    }
}
