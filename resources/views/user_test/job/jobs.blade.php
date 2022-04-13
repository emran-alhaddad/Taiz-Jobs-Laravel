@extends('admin.layout.master')
@section('adminContent')

    <div class="d-flex flex-row justify-content-end mb-3">
        <a class="btn btn-label-primary me-1 collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button"
            aria-expanded="false" aria-controls="collapseExample">
            Add New Job
        </a>
    </div>

    @if ($message = session('success'))
        <div class="alert alert-primary alert-dismissible" role="alert">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Done</h6>
            <p class="mb-0">{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

    @if ($message = session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
            <p class="mb-0">{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

    <div class="collapse @if ($errors->any()) {{ 'show' }} @endif" id="collapseExample" style="">
        <div class="card">
            <h5 class="card-header">Add New Job</h5>
            <div class="card-body">
                <form action="{{ route('add_job') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-name">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" placeholder="job title"
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
                            <select name="nature" id="nature" class="form-control @error('nature') invalid @enderror">
                                <option @if (old('nature') === 'Full-Time') selected @endif value="Full-Time">Full Time
                                </option>
                                <option @if (old('nature') === 'Part-Time') selected @endif value="Part-Time">Part Time
                                </option>
                            </select>
                            @error('nature')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label class="form-label" for="bs-validation-name">Salary</label>
                            <input type="text" name="salary" value="{{ old('salary') }}" placeholder="job salary"
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
                            <input type="date" name="start_date" value="{{ old('start_date') }}" id="start_date"
                                class="form-control @error('start_date') invalid @enderror">
                            @error('start_date')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" value="{{ old('end_date') }}" id="end_date"
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
                            <select name="company" id="company" class="form-control @error('company') invalid @enderror">
                                @if ($companies->count())
                                    @foreach ($companies as $company)
                                        <option @if (old('company') === $company->id) selected @endif
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
                                        <option @if (old('category') === $category->id) selected @endif
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
                                        <option @if (old('city') === $city->id) selected @endif
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
                            rows=" 3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="switch switch-primary">
                            <input type="checkbox" name="is_active" checked class="switch-input">
                            <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Is Active</span>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Avaliable Jobs</h5>
        <div class="table-responsive ">
            <table class="table">
                <caption class="ms-4">List of Jobs</caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Company</th>
                        <th>Category</th>
                        <th>Location</th>
                        <th>Salary</th>
                        <th>Nature</th>
                        <th>Dead Line</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($jobs->count())
                        @foreach ($jobs as $job)
                            <tr class="@if (!$job->is_active) table-danger @endif">
                                <td>{{ $job->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xl pull-up" title=""
                                            data-bs-original-title="{{ $job->title }}">
                                            <img src="../uploads/jobs/{{ $job->image }}" alt="Avatar"
                                                class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td><strong>{{ $job->title }}</strong></td>
                                <td>{{ $job->company->title }}</td>
                                <td>{{ $job->category->title }}</td>
                                <td>{{ $job->city->title }}</td>
                                <td>{{ $job->salary }}</td>
                                <td>{{ $job->nature }}</td>
                                <td>{{ $job->end_date }}</td>

                                <td><span
                                        class="badge bg-label-{{ $job->is_active ? 'primary' : 'danger' }} me-1">{{ $job->is_active ? 'Active' : 'Not Active' }}</span>
                                </td>
                                <td>

                                    <div class="d-flex flex-row justify-content-end mb-3">
                                        <a class="dropdown-item" href="{{ route('edit_job', $job->id) }}"><i
                                                class='bx bxs-show'></i>
                                        </a>
                                        @if ($job->is_active)
                                            <a class="dropdown-item deleteBtn" data-model-type="Job"
                                                data-action-type="{{ route('delete_job', $job->id) }}"
                                                data-bs-toggle="modal" data-id="{{ $job->id }}" href="#deleteModal"
                                                role="button" aria-expanded="false" aria-controls="deleteJob">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        @else
                                            <a href="#restoreModal" class="dropdown-item restoreBtn" data-model-type="Job"
                                                data-bs-toggle="modal"
                                                data-action-type="{{ route('restore_job', $job->id) }}"
                                                data-id="{{ $job->id }}">
                                                <i class='bx bx-rotate-left'></i></a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" class="text-center p-5 bg-warning text-white">
                                <p>There are no Jobs yet !</p>
                            </td>
                        </tr>
                    @endif


                </tbody>
            </table>
        </div>
    </div>

@endsection
