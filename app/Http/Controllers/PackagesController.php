<?php

namespace App\Http\Controllers;


class PackagesController extends Controller
{
    /**
     * WelcomeController constructor.
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('packages.index', []);
    }
}
