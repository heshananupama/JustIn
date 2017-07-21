<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $maxLoginAttempts = 5; // Amount of bad attempts user can make
    protected $lockoutTime = 300; // Time for which user is going to be blocked in seconds

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
    protected function authenticated($request, $user)
    {
        if($user->type === 'Leisure') {
            return redirect()->intended('home');
        }
        else if($user->type === 'Hotels') {
            return redirect('/hotels/home');
        }
        else if($user->type === 'r') {
            return redirect('/retailer/home');
        }

    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
