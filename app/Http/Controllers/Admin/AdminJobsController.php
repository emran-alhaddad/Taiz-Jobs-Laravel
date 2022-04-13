<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\SystemUtils;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;


class AdminJobsController extends Controller
{
    public function index()
    {
        return view('admin.job.jobs', [
            'cities' => City::get(),
            'categories' => Category::get(),
            'companies' => Company::get(),
            'jobs' => Job::with(['company','city','category'])->get()

        ]);
    }

    public function edit($id)
    {
        return view('admin.job.jobDetails', [
            'cities' => City::get(),
            'categories' => Category::get(),
            'companies' => Company::get(),
            'job' => Job::with(['company','city','category'])->find($id)
        ]);
    }

    public function addNew(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'image' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'company' => 'required',
            'category' => 'required',
            'city' => 'required',
            'nature' => 'required'

        ]);

        $create = Job::create(
            [
                'title' => $request->title,
                'image' => SystemUtils::uploadFile($request->file('image'), 'uploads/jobs'),
                'nature' => $request->nature,
                'salary' => $request->salary,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,
                'is_active' => $request->is_active === "on" ? 1 : 0,
                'created_by' => 1,
                'company_id' => $request->company,
                'category_id' => $request->category,
                'city_id' => $request->city,

            ]
        );


        if ($create)
            return redirect()->route('show_jobs')
                ->with(['success' => 'job created successful']);
        return back()->with(['error' => 'can not create job']);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'start_date' => 'required',
            'end_date' => 'required',
            'company' => 'required',
            'category' => 'required',
            'city' => 'required',
            'nature' => 'required'

        ]);

        if ($request->has('image'))
            $image = SystemUtils::uploadFile($request->file('image'), 'uploads/jobs', $request->old_image);
        else
            $image = $request->old_image;
        $update = Job::updateOrCreate(
            ['id' => $request->id],
            [
                'nature' => $request->nature,
                'salary' => $request->salary,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,
                'is_active' => $request->is_active === "on" ? 1 : 0,
                'company_id' => $request->company,
                'category_id' => $request->category,
                'city_id' => $request->city,
                'created_by' => 2,
                'updated_at' => date("Y-m-d H:i:s", time()),
                'image' => $image
            ]
        );

        if ($update)
            return redirect()->route('edit_job', $request->id)
                ->with(['success' => 'job updated successful']);
        return back()->with(['error' => 'can not update job']);
    }

    public function delete(Request $request)
    {

        $update = Job::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 0]
        );

        if ($update)
            return back()
                ->with(['success' => 'job deleted successful']);
        return back()->with(['error' => 'can not delete job']);
    }

    public function restore(Request $request)
    {

        $update = Job::updateOrCreate(
            ['id' => $request->id],
            ['is_active' => 1]
        );

        if ($update)
            return back()
                ->with(['success' => 'job restored successful']);
        return back()->with(['error' => 'can not restore job']);
    }
}
