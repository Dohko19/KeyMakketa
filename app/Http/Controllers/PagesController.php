<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
    	return view('admin.home');
    }

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function planesaccion()
    {
    	return view('admin.planes');
    }

    public function reportes()
    {
    	return view('admin.reportes');
    }

    public function graficas()
    {
        return view('admin.graficas');
    }
}
