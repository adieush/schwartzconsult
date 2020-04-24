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

    /**
     * Terms & Conditions
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function termsAndConditions()
    {
        return view('pages.terms', []);
    }

    /**
     * Service & Refund Policies
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function serviceRefund()
    {
        return view('pages.service-refund', []);
    }

    /**
     * Service & Refund Policies
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function companyDetails()
    {
        return view('pages.company-details', []);
    }
}
