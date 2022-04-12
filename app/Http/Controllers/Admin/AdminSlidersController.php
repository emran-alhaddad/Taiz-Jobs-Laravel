<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\SystemUtils;
use App\Models\Slider;
use Illuminate\Http\Request;

class AdminSlidersController extends Controller
{
    public function index()
    {
        return view('admin.slider.sliders',[
            'sliders' => Slider::get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.slider.editSlider',[
            'slider' => Slider::find($id)
        ]);
    }

    public function addNew(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
            'image' => 'required'
        ]);

        $create = Slider::create(
            [
                'title' => $request->title,
                'image' => SystemUtils::uploadFile($request->file('image'),'uploads/sliders'),
                'description' => $request->description,
                'is_active' => $request->is_active === "on"?1:0,
                'created_by' => 1
            ]
            );


        if($create)
        return redirect()->route('show_sliders')
        ->with(['success'=>'slider created successful']);
        return back()->with(['error'=>'can not create slider']);

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
        ]);

        if($request->has('image'))
        $image = SystemUtils::uploadFile($request->file('image'),'uploads/sliders',$request->old_image);
        else
        $image = $request->old_image;
        $update = Slider::updateOrCreate(['id' => $request->id],
        [
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->is_active ==="on"?1:0,
            'created_by' => 2,
            'updated_at' => date("Y-m-d H:i:s", time()),
            'image' => $image
        ]);

        if($update)
        return redirect()->route('edit_slider',$request->id)
        ->with(['success'=>'slider updated successful']);
        return back()->with(['error'=>'can not update slider']);

    }

    public function delete(Request $request)
    {

        $update = Slider::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'slider deleted successful']);
        return back()->with(['error' => 'can not delete slider']);
    }

    public function restore(Request $request)
    {

        $update = Slider::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'slider restored successful']);
        return back()->with(['error' => 'can not restore slider']);
    }
}
