<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class AdminCitiesController extends Controller
{
    public function index()
    {
        return view('admin.city.cities',[
            'cities' => City::get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.city.editCity',[
            'city' => City::find($id)
        ]);
    }

    public function addNew(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:3|max:30',
        ]);

        $create = City::create(
            [
                'title' => $request->title,
                'is_active' => $request->is_active === "on"?1:0,
                'created_by' => 1
            ]
            );


        if($create)
        return redirect()->route('show_cities')
        ->with(['success'=>'city created successful']);
        return back()->with(['error'=>'can not create city']);

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:3|max:30',
        ]);

        $update = City::updateOrCreate(['id' => $request->id],
        [
            'title' => $request->title,
            'is_active' => $request->is_active ==="on"?1:0,
            'created_by' => 2,
            'updated_at' => date("Y-m-d H:i:s", time())
        ]);

        if($update)
        return redirect()->route('edit_city',$request->id)
        ->with(['success'=>'city updated successful']);
        return back()->with(['error'=>'can not update city']);

    }

    public function delete(Request $request)
    {

        $update = City::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'city deleted successful']);
        return back()->with(['error' => 'can not delete city']);
    }

    public function restore(Request $request)
    {

        $update = City::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'city restored successful']);
        return back()->with(['error' => 'can not restore city']);
    }

}
