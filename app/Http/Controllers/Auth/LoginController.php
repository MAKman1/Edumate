<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Institute;
use Illuminate\Http\Request;
use Auth;   

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index( Request $request){
        return view('login')->with(['pagename' => 'Login']);
    }
    function checkLogin( Request $request){
        $this->validate($request, [
            'username'     =>      'required|alphaNum',
            'password'  =>      'required|alphaNum|min:4'
        ]);

        $user_data = array(
            'username'  => $request->get('username'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data)){
            if (Auth::check()) {
                $institute = Institute::find( Auth::user()->institute_id)->first();
                if( $institute != null)
                    return redirect('/');
                else{
                    Auth::logout();
                    return back()->with('error', 'Error logging in, please try again');
                }

            }
            else {
                Auth::logout();
                return back()->with('error', 'Invalid Login Details');
            }
        }
        else{
            return back()->with('error', 'Invalid Login Details');
        }
    }
    function logout( Request $request)
    {
        Auth::logout();
        $logoutMessage = 'Logged out successfully!';
        return redirect('/')->with( $logoutMessage);
    }
}
