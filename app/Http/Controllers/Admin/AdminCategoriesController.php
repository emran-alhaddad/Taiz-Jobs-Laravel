<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\SystemUtils;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    public function index()
    {
        return view('admin.category.categories',[
            'categories' => Category::get()
        ]);
    }

    public function edit($id)
    {
        return view('admin.category.editCategory',[
            'category' => Category::find($id)
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
        $fileds['image'] = SystemUtils::uploadFile($request->file('image'),'uploads/categories');

        $create = Category::create($fileds);


        if($create)
        return redirect()->route('show_categories')
        ->with(['success'=>'category created successful']);
        return back()->with(['error'=>'can not create category']);

    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:20',
        ]);

        if($request->has('image'))
        $image = SystemUtils::uploadFile($request->file('image'),'uploads/categories',$request->old_image);
        else
        $image = $request->old_image;
        $update = Category::updateOrCreate(['id' => $request->id],
        [
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->is_active ==="on"?1:0,
            'created_by' => 2,
            'updated_at' => date("Y-m-d H:i:s", time()),
            'image' => $image
        ]);

        if($update)
        return redirect()->route('edit_category',$request->id)
        ->with(['success'=>'category updated successful']);
        return back()->with(['error'=>'can not update category']);

    }

    public function delete(Request $request)
    {

        $update = Category::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'category deleted successful']);
        return back()->with(['error' => 'can not delete category']);
    }

    public function restore(Request $request)
    {

        $update = Category::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'category restored successful']);
        return back()->with(['error' => 'can not restore category']);
    }
}
