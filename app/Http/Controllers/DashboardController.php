<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

  public function index()
  {
    return view('dashboard.user-info');
  }


  public function courses()
  {
    return view('dashboard.courses');
  }


  public function education()
  {
    return view('dashboard.education');
  }


  public function experience()
  {
    return view('dashboard.experience');
  }


  public function skills()
  {
    return view('dashboard.skills');
  }
}
