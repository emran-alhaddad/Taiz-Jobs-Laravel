<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\Partener;
use App\Models\Service;
use App\Models\Slider;

class WebsiteController extends Controller
{
    function home()
    {

        return view('front.home',[
            'parteners' => Partener::where('is_active',1)->get(),
            'sliders' => Slider::where('is_active',1)->get()
        ]);
    }

    function about()
    {

        return view('front.about_us',[
            'sliders' => Slider::where('is_active',1)->get()
        ]);
    }

    function contact()
    {

        return view('front.contact',[
            'sliders' => Slider::where('is_active',1)->get()
        ]);
    }

    function services()
    {

        return view('front.our_services',[
            'sliders' => Slider::where('is_active',1)->get(),
            'services' => Service::where('is_active',1)->get()
        ]);
    }

    function partener_companies()
    {

        return view('front.parteners_and_companies',[
            'sliders' => Slider::where('is_active',1)->get(),
            'companies' => Company::where('is_active',1)->get(),
        ]);
    }

    function jobs()
    {

        return view('front.jobs',[
            'sliders' => Slider::where('is_active',1)->get(),
            'cities' => City::where('is_active',1)->get(),
            'companies' => Company::where('is_active',1)->get(),
            'categories' => Category::where('is_active',1)->get(),

        ]);
    }

    function job_details()
    {

        return view('front.job_details',[
            'sliders' => Slider::where('is_active',1)->get()
        ]);
    }
}
