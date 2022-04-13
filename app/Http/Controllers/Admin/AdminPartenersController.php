<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\SystemUtils;
use App\Models\Partener;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminPartenersController extends Controller
{

    public function index()
    {
        return view('admin.partener.parteners',[
            'parteners' => Partener::get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.partener.editParteners',[
            'partener' => Partener::find($id)
        ]);
    }

    public function addNew(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
            'image' => 'required',
            'url' => 'required|url'
        ]);

        $create = Partener::create(
            [
                'title' => $request->title,
                'image' => SystemUtils::uploadFile($request->file('image'),'uploads/parteners'),
                'url' => $request->url,
                'is_active' => $request->is_active === "on"?1:0,
                'created_by' => 1
            ]
            );


        if($create)
        return redirect()->route('show_parteners')
        ->with(['success'=>'partener created successful']);
        return back()->with(['error'=>'can not create partener']);

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
            'url' => 'required|url'

        ]);

        if($request->has('image'))
        $image = SystemUtils::uploadFile($request->file('image'),'uploads/parteners',$request->old_image);
        else
        $image = $request->old_image;
        $update = Partener::updateOrCreate(['id' => $request->id],
        [
            'title' => $request->title,
            'is_active' => $request->is_active ==="on"?1:0,
            'url' => $request->url,
            'updated_at' => date("Y-m-d H:i:s", time()),
            'image' => $image
        ]);

        if($update)
        return redirect()->route('edit_partener',$request->id)
        ->with(['success'=>'partener updated successful']);
        return back()->with(['error'=>'can not update partener']);

    }

    public function delete(Request $request)
    {

        $update = Partener::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'partener deleted successful']);
        return back()->with(['error' => 'can not delete partener']);
    }

    public function restore(Request $request)
    {

        $update = Partener::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'partener restored successful']);
        return back()->with(['error' => 'can not restore partener']);
    }
}
