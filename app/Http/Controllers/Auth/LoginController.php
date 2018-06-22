<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo = '/my/account';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        try
        {
            //dump(Auth::user());
            // $this->validate($request, [
            //     'email' => 'required|min:3|max:255',
            //     'password' => 'required|min:6'
            //     ]);
            //dd($this->validateLogin($request));   
                

            // $credentials = $request->only('name', 'password');
            //     dd(Auth::attempt($credentials));
            // if (Auth::attempt($credentials))
            // {
            //     dd('if');
            //     return redirect(route('account')->with('success', 'Ви авторизовані'));
            // }
            if(Auth::attempt(['email'=> $request->input('email'), 'password' => $request->input('password')], TRUE))
            {
                //dd('auth');
                return redirect(route('account'))->with('success', 'Ви зареєструвались');
            }
            
                //dump('neauth');
                return redirect(route('login'))->with('error', 'Неправильний логін чи пароль');
            
        }
        catch(ValidationExeption $e)
        {
            dd('cathc');
            \Log::error($e->getMessage());
            return back()->with('error', 'Неправильний логін чи пароль');
        }
    }
}
