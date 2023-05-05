<?php

namespace App\Http\Controllers;


use Exception;
use App\Models\Bid;
use App\Models\User;
use App\Models\invoice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session; 





class AuthController extends Controller
{
    public function loadRegister(){
        if (Auth::user() && Auth::user()->is_admin == 1) {
            return redirect('/admin/dashboard');
        } else if(Auth::user() && Auth::user()->is_admin == 0){
            return redirect('/dashboard');
        }
        return view('register');
    }

    public function userRegister(Request $request){
        $request->validate([
            'name'=>'string|required|min:2',
            'email'=> 'string|email|required|max:100|unique:users',
            'password'=>'string|required|confirmed|min:6'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success','Successfully registered');
    }

    public function loadLogin(){
        if (Auth::user() && Auth::user()->is_admin == 1) {
            return redirect('/admin/dashboard');
        } else if(Auth::user() && Auth::user()->is_admin == 0){
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function userLogin(Request $request){
        $request->validate([
            'email'=>'string|required|email',
            'password'=>'string|required'
        ]);

        $loginDetails=$request->only('email','password');
        if (Auth::attempt($loginDetails)) {
            if (Auth::user()->is_admin == 1) {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/dashboard');
            }
            
        } else {
            return back()->with('error', 'Login Details Mismatch');
        }
        
    }


    public function adminDashboard(){

        $invoice = invoice::all();
        return view('admin.dashboard',compact('invoice'));
    }

    

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function forgetpassword(){
        return view('forgetPassword');
    }

    public function forgetpass(Request $request){
        try {
            $user = User::where('email',$request->email)->get();
            if (count($user) > 0) {
                $token = Str::random(30);
                $domain = URL::to('/');
                $url = $domain.'/resetpassword?token='.$token;

                $data['url']= $url;
                $data['email']=$request->email;
                $data['title']='Password Reset';
                $data['body']='Please click Here';

                Mail::send('forgetpassmail', ['data'=>$data], function ($message) use ($data) {
                    $message->to($data['email'])->subject($data['title']);
                });

                $dateandTime = Carbon::now()->format('Y-m-d H:i:s');

                PasswordReset::updateOrCreate(
                    ['email'=>$request->email],
                    [
                        'email'=>$request->email,
                        'token'=>$token,
                        'created_at' => $dateandTime
                    ]
                    );
                    return back()->with('success', 'Please reset your password using your mail');

            } else {
                return back()->with('error', 'Email not exixts');
            }
            

        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

}



