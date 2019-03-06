<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
// use Barryvdh\Debugbar\Facade as Debugbar;
// use Debugbar;
use Debugbar;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        Debugbar::info('Guest!');
        // $this->middleware('guest')->except('userLogout');
        $this->middleware('guest',['except' => ['logout','userLogout']]);
    }

    public function userLogout(Request $request)
    {
        Debugbar::info('userLogout!');

        Auth::guard('web')->logout();
        // $this->guard('web')->logout();
        // dd('hello');
        return $this->loggedOut($request) ?: redirect('/');
        return redirect('/');
        // $request->session()->invalidate();

        // return $this->loggedOut($request) ?: redirect('/');
    }

}
