<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function dashboard()
    {
        return view('backend.dash');
    }
    public function blank()
    {
        return view('backend.pages.blank');
    }
    public function form()
    {
        return view('backend.pages.form');
    }
    public function invoice()
    {
        return view('backend.pages.invoice');
    }
    public function login()
    {
        return view('backend.pages.login');
    }
    public function modal()
    {
        return view('backend.pages.modal');
    }
    public function register()
    {
        return view('backend.pages.register');
    }
    public function table()
    {
        return view('backend.pages.table');
    }
}
