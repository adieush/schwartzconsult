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
     * Company description
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('pages.about', []);
    }

    /**
     * Contact page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('pages.contact', []);
    }
}
