<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequestNewPassword;
use App\Mail\RegisterSuccess;
use App\Mail\ResetPasswordEmail;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class ResetPasswordController extends Controller
{
    public function getEmailReset()
    {
        return view('auth.passwords.email');
    }

    public function checkEmailResetPassword(Request $request)
    {
        $account = DB::table('users')->where('email', $request->email)->first();
        if($account){
            //send email
            $token = Hash::make($account->email.$account->id);
            DB::table('password_resets')
                ->insert([
                   'email' => $account->email,
                   'token' => Hash::make($token),
                    'created_at' => Carbon::now()
                ]);

            $link = route('get.new_password', ['email' => $account->email, '_token' =>$token ]);

            Mail::to($account->email)->send(new ResetPasswordEmail($link));

            return redirect()->to('/');
        }
        return redirect()->back();
    }

    public function newPassword(Request $request)
    {
        $token = $request->_token;

        //check ton tai token
        $checkToken = DB::table('password_resets')
            ->where('token', $token)
            ->first();

        if($checkToken) return redirect()->to('/');

        //check time ton tai token
        $now = Carbon::now();
        if($now->diffInMinutes($checkToken->create_at) > 3) {
            DB::table('password_resets')->where('email', $request->email)->delete();
            return redirect()->to('/');
        }
        return view('auth.passwords.reset');
    }
    public function savePassword(Request $request)
    {
        $password = $request->password;

        $data['password'] = Hash::make($password);
        $email = $request->email;

        if(!$email) return redirect()->to('/');
        DB::table('users')->where('email', $email)
            ->update($data);
        DB::table('password_resets')->where('email', $email)->delete();
        return redirect()->route('get.login');
    }

}
