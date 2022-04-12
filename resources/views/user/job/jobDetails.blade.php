@extends('admin.layout.master')
@section('adminContent')

    <div class="d-flex flex-row justify-content-end mb-3">
        <a class="btn btn-label-primary me-1 collapsed" data-bs-toggle="collapse" href="#editJob" role="button"
            aria-expanded="false" aria-controls="editJob">
            <i
                    class="fa fa-edit"></i> Edit This Job
        </a>
        @if ($job->is_active)
        <a class="btn btn-label-danger me-1 deleteBtn"
        data-model-type="Job" data-action-type="{{ route('delete_job', $job->id) }}"
        data-bs-toggle="modal" data-id="{{ $job->id }}" href="#deleteModal" role="button"
        aria-expanded="false" aria-controls="deleteJob">
        <i class="fa fa-trash"></i>
        Delete This Job
    </a>
        @else
        <a href="#restoreModal" class="btn btn-label-success me-1 restoreBtn" data-model-type="Job"
        data-bs-toggle="modal" data-action-type="{{ route('restore_job', $job->id) }}"
        data-id="{{ $job->id }}">
            <i class="fa fa-rotate-left"></i>
            Restore This Job</a>
        @endif
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-primary alert-dismissible" role="alert">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Done</h6>
            <p class="mb-0">{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
            <p class="mb-0">{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif


    <div class="collapse mb-5" id="editJob">
        <div class="row {{ !$job->is_active ? 'alert-danger' : '' }}">
            <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('uploads/jobs') . '/' . $job->image }}" class="img-fluid" alt="">
                <p class="fs-3 pt-3">Current Image</p>
            </div>
            <div class="col-8">
                <div class="card">
                    <h5 class="card-header">Edit Job</h5>
                    <div class="card-body">

                        <form action="{{ route('update_job', $job->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" value="{{ $job->id }}">
                            <input type="hidden" name="old_image" value="{{ $job->image }}">
                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-name">Title</label>
                                <input type="text" name="title" value="{{ $job->title }}" placeholder="job title"
                                    class="form-control @error('title') invalid @enderror">
                                @error('title')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-upload-file">Job Image</label>
                                <input name="image" type="file" class="form-control @error('image') invalid @enderror">
                                @error('image')
                                    <div class="   invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label" for="nature">Nature</label>
                                    <select name="nature" id="nature"
                                        class="form-control @error('nature') invalid @enderror">
                                        <option @if ($job->nature === 'Full-Time') selected @endif value="Full-Time">Full
                                            Time</option>
                                        <option @if ($job->nature === 'Part-Time') selected @endif value="Part-Time">Part
                                            Time</option>
                                    </select>
                                    @error('nature')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label class="form-label" for="bs-validation-name">Salary</label>
                                    <input type="text" name="salary" value="{{ $job->salary }}" placeholder="job salary"
                                        class="form-control @error('salary') invalid @enderror">
                                    @error('salary')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" name="start_date" value="{{ $job->start_date }}" id="start_date"
                                        class="form-control @error('start_date') invalid @enderror">
                                    @error('start_date')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" name="end_date" value="{{ $job->end_date }}" id="end_date"
                                        class="form-control @error('end_date') invalid @enderror">
                                    @error('end_date')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label" for="company">Company</label>
                                    <select name="company" id="company"
                                        class="form-control @error('company') invalid @enderror">
                                        @if ($companies->count())
                                            @foreach ($companies as $company)
                                                <option @if ($job->company_id === $company->id) selected @endif
                                                    value="{{ $company->id }}">{{ $company->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('company')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label class="form-label" for="category">Category</label>
                                    <select name="category" id="category"
                                        class="form-control @error('category') invalid @enderror">
                                        @if ($categories->count())
                                            @foreach ($categories as $category)
                                                <option @if ($job->category_id === $category->id) selected @endif
                                                    value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('category')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label class="form-label" for="city">City</label>
                                    <select name="city" id="city" class="form-control @error('city') invalid @enderror">
                                        @if ($cities->count())
                                            @foreach ($cities as $city)
                                                <option @if ($job->city_id === $city->id) selected @endif
                                                    value="{{ $city->id }}">{{ $city->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('city')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="bs-validation-bio">Description</label>
                                <textarea name="description" class="form-control @error('description') invalid @enderror"
                                    rows=" 3">{{ $job->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="switch switch-primary">
                                    <input type="checkbox" name="is_active" {{ $job->is_active ? 'checked' : '' }}
                                        class="switch-input">
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Is Active</span>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-5 col-sm-12">
            <div class="row row position-sticky top-0">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('uploads/jobs') . '/' . $job->image }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $job->title }}</h5>
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                Salary: {{ $job->salary }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-7 col-sm-12">
            <div class="row">
                <div class="col mb-5">
                    <div class="mb-3 ">
                        <h4>Job Title:</h4>
                        <p>{{ $job->title }}</p>
                        <h4>Job Salary:</h4>
                        <p>{{ $job->salary }}</p>
                    </div>

                    <h4>Job Description:</h4>
                    <p class="text-justify">
                        {{ $job->description }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <h3>Job Summary</h3>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Job Nature</th>
                                <td>{{ $job->nature }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Published On</th>
                                <td>{{ $job->start_date }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Dead Line</th>
                                <td>{{ $job->end_date }}</td>
                            </tr>
                            @if ($categories->count())
                                @foreach ($categories as $category)
                                    @if ($job->category_id === $category->id)
                                        <tr>
                                            <th scope="row">Category</th>
                                            <td>{{ $category->title }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif

                            @if ($cities->count())
                                @foreach ($cities as $city)
                                    @if ($job->city_id === $city->id)
                                        <tr>
                                            <th scope="row">Location</th>
                                            <td>{{ $city->title }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif

                            <tr class="{{ $job->is_active ? '' : 'table-danger' }}">
                                <th scope="row">Status</th>
                                <td>{{ $job->is_active ? 'Acive' : 'Not Active' }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Creator</th>
                                <td>{{ $job->created_by }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Creation Time</th>
                                <td>{{ $job->created_at }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Last Update </th>
                                <td>{{ $job->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($companies->count())
                @foreach ($companies as $company)
                    @if ($job->company_id === $company->id)
                        <div class="row mt-3">
                            <div class="col mb-3">
                                <h3>Company Details</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Company Title</th>
                                            <td>{{ $company->title }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Company Description</th>
                                            <td>{{ $company->description }}</td>
                                        </tr>

                                        <tr class="{{ $company->is_active ? '' : 'table-danger' }}">
                                            <th scope="row">Status</th>
                                            <td>{{ $company->is_active ? 'Acive' : 'Not Active' }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>

@endsection
