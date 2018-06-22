<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function index()
    {
        dd(Auth::id());
        dd('Ви увійшли у кабінет');
    }

    public function success()
    {
       // dd(Auth::user());

       // echo 'Ви успішно зареєстувались, тепер можете ' . '<a href="http:////blog/public/login">увійти</a>' ;
       echo 'account';
    }
}
