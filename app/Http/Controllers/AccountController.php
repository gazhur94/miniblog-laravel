<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        dd('Ви увійшли у кабінет');
    }

    public function success()
    {
        echo 'Ви успішно зареєстувались, тепер можете ' . '<a href="http:////blog/public/login">увійти</a>' ;
    }
}
