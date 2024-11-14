<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showArtikel()
    {
        return view('artikel');
    }

    public function showChangeProfile()
    {
        return view('change_profile');
    }

    public function showArtikelForm()
    {
        return view('form_artikel');
    }

    public function showHome()
    {
        return view('home');
    }

    public function showHowArtikel()
    {
        return view('howartikel');
    }

    public function showIsiArtikel()
    {
        return view('isi_artikel');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function showProfile()
    {
        return view('profile');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function showSuccess()
    {
        return view('success_login');
    }

}
