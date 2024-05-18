<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\TwoFactorCode;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        return kview('auth.login');
    }

    public function authenticated(Request $request,$user){

        if ($user->email == 'rusa@admin.com' && $user->name == 'Admin') {
            session(['user_role' => 'admin']);
        } elseif ($user->email == 'mdc@colleges.com' && $user->name == 'MDC') {
            session(['user_role' => 'mdc']);
        } elseif ($user->email == 'girls@hostel.com' && $user->name == 'GIRLS HOSTEL') {
            session(['user_role' =>'girls_hostel']);
        } elseif ($user->email == 'professional@colleges.com' && $user->name == 'PROFESSIONAL COLLEGES') {
            session(['user_role' => 'professional_colleges']);

        try {
            if($user->two_factor_enable){
                $user->generateTwoFactorCode();
                $user->notify(new TwoFactorCode());
            }
        } catch(\Exception $e) {
            auth()->logout();
            return redirect()->back()->withMessage("Something went wrong, Please try again after some time.");
        }
    }
}
}