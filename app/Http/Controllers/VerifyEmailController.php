<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{

    /**
     * @param  string $token
     * @return \Illuminate\Http\RedirectResponse
     *
     *
     *
     */


    public function verify($token){
        $user=User::where('token',$token)->firstOrFail()
         ->update(['token'=>null]);
        if($user){
            user::where(['token',$token])->update(['active'=>'1','token'=>null]);
        }else{
            return 'user not found';
        }


        return redirect()
            ->route('ads')
            ->with('success','Account Verified!');
    }
}
