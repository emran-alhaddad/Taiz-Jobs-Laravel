<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\SystemUtils;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminServicesController extends Controller
{
    public function index()
    {
        return view('admin.service.services',[
            'services' => Service::get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.service.editService',[
            'service' => Service::find($id)
        ]);
    }

    public function addNew(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:3|max:100',
        ]);

        $fileds = [
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->is_active === "on"?1:0,
            'created_by' => 1
        ];

        if($request->has('image'))
        $fileds['image'] = SystemUtils::uploadFile($request->file('image'),'uploads/services');

        $create = Service::create($fileds);

        if($create)
        return redirect()->route('show_services')
        ->with(['success'=>'service created successful']);
        return back()->with(['error'=>'can not create service']);

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
        ]);

        if($request->has('image'))
        $image = SystemUtils::uploadFile($request->file('image'),'uploads/services',$request->old_image);
        else
        $image = $request->old_image;
        $update = Service::updateOrCreate(['id' => $request->id],
        [
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->is_active ==="on"?1:0,
            'created_by' => 2,
            'updated_at' => date("Y-m-d H:i:s", time()),
            'image' => $image
        ]);

        if($update)
        return redirect()->route('edit_service',$request->id)
        ->with(['success'=>'service updated successful']);
        return back()->with(['error'=>'can not update service']);

    }

    public function delete(Request $request)
    {

        $update = Service::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'service deleted successful']);
        return back()->with(['error' => 'can not delete service']);
    }

    public function restore(Request $request)
    {

        $update = Service::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'service restored successful']);
        return back()->with(['error' => 'can not restore service']);
    }
}
