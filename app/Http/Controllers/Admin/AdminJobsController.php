<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminJobsController extends Controller
{
    public function index()
    {
        return view('admin.jobs');
    }
}
