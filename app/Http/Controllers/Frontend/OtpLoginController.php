<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utility\SendSMSUtility;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class OtpLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function otpvarification(Request $request){

        $reg_user = User::where('phone',$request->phone)->first();

        if($request->otp == Null){
            if($reg_user == Null){
                $rand = rand(00000,99999);
                User::create([
                    'otp_genarate' => $rand,
                    'phone' => $request->phone,
                ]);

                $phone = $request->phone;
                // Prepare message
                $message = 'Your OTP: ' . $rand;
                // Send OTP via SMS
                SendSMSUtility::sendSMS($phone, $message);

                // Return a response indicating success
                return response()->json(['message' => 'OTP sent successfully', 'otp' => $rand]);
            }
            elseif($reg_user->phone != Null ){
               $user_otp = User::where('phone', $reg_user->phone )->first();
               $rand2 = rand(00000,99999);
               $user_otp->update([
                'otp_genarate'=>$rand2,
               ]);
                $phone = $request->phone;
                // Prepare message
                $message = 'Your OTP: ' . $rand2;
                // Send OTP via SMS
                SendSMSUtility::sendSMS($phone, $message);

                // Return a response indicating success
                return response()->json(['message' => 'OTP sent successfully', 'otp' => $rand2]);
            }
        }

        else{
            $this->validate($request,[
                'otp' =>'required',
            ]);

            $user = User::where('otp_genarate', $request->otp)->first();
            if($user){
                auth()->login($user, true);
                if(Auth::guard('web')->user()->role == "3"){
                    $notification = array(
                        'message' => 'User Login Successfully.',
                        'alert-type' => 'success'
                    );
                    return response()->json(['msg' => 'Login successful']);
                }
                else{
                    Auth::guard('web')->logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();

                    $notification = array(
                        'msg' => 'Invaild Email Or Password.',
                        'alert-type' => 'error'
                    );
                    return response()->json(['error' => 'Invalid OTP'], 422);
                }

            }

        }

    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
