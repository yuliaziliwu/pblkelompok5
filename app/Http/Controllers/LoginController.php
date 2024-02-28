<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function tampilkan($nama) {
        return view('login', ['nama => $nama']);
    }
}
