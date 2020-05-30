<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/admin';

    //737
    public function redirectTo(){
        $role = Auth::user()->role->name;     
        switch ($role) {
            case 'admin':
                    return '/admin';
                break;
            case 'user':
                    return '/home';
                break; 
        }
    }

    //737
    public function login(\Illuminate\Http\Request $request) {
        $this->validateLogin($request);
    
        if ($this->guard()->validate($this->credentials($request))) {
            $user = $this->guard()->getLastAttempted();
    
            if ($user->activated && $this->attemptLogin($request)) {
                return $this->sendLoginResponse($request);
            } else {
                $this->incrementLoginAttempts($request);
                return redirect()
                    ->back()
                    ->withErrors(['activate' => 'You must activate your account!']);
            }
        }
    
        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //737
    public function logout(Request $request) {
        $role = Auth::user()->role->name;     
        switch ($role) {
            case 'admin':
                Auth::logout();
                    return redirect('/login');
                break;
            case 'user':
                Auth::logout();
                    return redirect('/');
                break; 
        }
      }

}
