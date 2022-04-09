<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function account()
    {
        return view('user.account');
    }

    public function courses()
    {
        return view('user.courses');
    }

    public function education()
    {
        return view('user.education');
    }

    public function experiences()
    {
        return view('user.experiences');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function skills()
    {
        return view('user.skills');
    }
}
