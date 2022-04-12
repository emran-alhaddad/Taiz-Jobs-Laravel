<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\SystemUtils;
use App\Models\Company;
use Illuminate\Http\Request;

class AdminCompaniesController extends Controller
{
    public function index()
    {
        return view('admin.company.companies',[
            'companies' => Company::get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.company.editCompany',[
            'company' => Company::find($id)
        ]);
    }

    public function addNew(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
        ]);

        $fileds = [
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->is_active === "on"?1:0,
            'created_by' => 1
        ];

        if($request->has('image'))
        $fileds['image'] = SystemUtils::uploadFile($request->file('image'),'uploads/companies');

        $create = Company::create($fileds);

        if($create)
        return redirect()->route('show_companies')
        ->with(['success'=>'company created successful']);
        return back()->with(['error'=>'can not create company']);

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
        ]);

        if($request->has('image'))
        $image = SystemUtils::uploadFile($request->file('image'),'uploads/companies',$request->old_image);
        else
        $image = $request->old_image;
        $update = Company::updateOrCreate(['id' => $request->id],
        [
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->is_active ==="on"?1:0,
            'created_by' => 2,
            'updated_at' => date("Y-m-d H:i:s", time()),
            'image' => $image
        ]);

        if($update)
        return redirect()->route('edit_company',$request->id)
        ->with(['success'=>'company updated successful']);
        return back()->with(['error'=>'can not update company']);

    }

    public function delete(Request $request)
    {

        $update = Company::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'company deleted successful']);
        return back()->with(['error' => 'can not delete company']);
    }

    public function restore(Request $request)
    {

        $update = Company::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'company restored successful']);
        return back()->with(['error' => 'can not restore company']);
    }

}
