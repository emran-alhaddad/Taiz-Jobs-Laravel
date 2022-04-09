<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Partener;

class WebsiteController extends Controller
{
    function home()
    {

        return view('front.home',[
            'parteners' => Partener::get()
        ]);
    }

    function about()
    {

        return view('front.about_us');
    }

    function contact()
    {

        return view('front.contact');
    }

    function services()
    {

        return view('front.our_services');
    }

    function partener_companies()
    {

        return view('front.parteners_and_companies');
    }

    function jobs()
    {

        return view('front.jobs');
    }

    function job_details()
    {

        return view('front.job_details');
    }
}
