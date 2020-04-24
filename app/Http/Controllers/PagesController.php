<?php

namespace App\Http\Controllers;


class PagesController extends Controller
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
    public function about()
    {
        return view('pages.about', []);
    }
}
