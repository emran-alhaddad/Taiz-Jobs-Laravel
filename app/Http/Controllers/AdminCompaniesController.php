<?php

namespace App\Http\Controllers;

use App\Http\SystemUtils;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminCompaniesController extends Controller
{
    public function index()
    {
        return view('admin.companies');
    }

    public function addNew(Request $request)
    {
        Validator::validate($request->all(),[
            'title' => ['required','min:5','max:20'],
            'image' => ['required']
        ],[
            'title.required' => 'company title is required',
            'title.min' => 'company title must be more than 5 char',
            'title.max' => 'company title must be less than 20 char',
            'image.required' => 'company image is required'
        ]);


        $c = new Company();
        $c->title = $request->title;
        // echo "<pre>";
        // print_r($request->file('image')->getClientOriginalName());
        // exit;
        $c->image = SystemUtils::uploadFile($request->file('image'),'uploads');
        $c->description = $request->input('description');
        $c->is_active = $request->input('is_active');
        // $c->created_by = 1;


        if($c->save())
        return redirect()->route('show_companies')
        ->with(['success'=>'company created successful']);
        return back()->with(['error'=>'can not create company']);

    }

}
