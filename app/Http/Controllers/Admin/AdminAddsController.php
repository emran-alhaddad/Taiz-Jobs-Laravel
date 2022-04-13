<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\SystemUtils;
use App\Models\Adds;
use Illuminate\Http\Request;

class AdminAddsController extends Controller
{
    public function index()
    {
        return view('admin.advertizing.adds', [
            'advertizings' => Adds::get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.advertizing.editAdds', [
            'advertizing' => Adds::find($id)
        ]);
    }

    public function addNew(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url',
            'image' => 'required'
        ]);

        $create = Adds::create(
            [
                'url' => $request->url,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'image' => SystemUtils::uploadFile($request->file('image'), 'uploads/advertizings'),
                'description' => $request->description,
                'is_active' => $request->is_active === "on" ? 1 : 0,
                'created_by' => 1
            ]
        );


        if ($create)
            return redirect()->route('show_advertizings')
                ->with(['success' => 'advertizing created successful']);
        return back()->with(['error' => 'can not create advertizing']);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url',
        ]);

        if ($request->has('image'))
            $image = SystemUtils::uploadFile($request->file('image'), 'uploads/advertizings', $request->old_image);
        else
            $image = $request->old_image;
        $update = Adds::updateOrCreate(
            ['id' => $request->id],
            [
                'url' => $request->url,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,
                'is_active' => $request->is_active === "on" ? 1 : 0,
                'created_by' => 2,
                'updated_at' => date("Y-m-d H:i:s", time()),
                'image' => $image
            ]
        );

        if ($update)
            return redirect()->route('edit_advertizing', $request->id)
                ->with(['success' => 'advertizing updated successful']);
        return back()->with(['error' => 'can not update advertizing']);
    }

    public function delete(Request $request)
    {

        $update = Adds::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'advertizing deleted successful']);
        return back()->with(['error' => 'can not delete advertizing']);
    }

    public function restore(Request $request)
    {

        $update = Adds::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'advertizing restored successful']);
        return back()->with(['error' => 'can not restore advertizing']);
    }
}
