@extends('admin.layout.master')
@section('adminContent')
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

    <div class="row {{ !$company->is_active?"alert-danger":"" }}">
        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset("uploads/companies")."/".$company->image}}" class="img-fluid" alt="">
            <p class="fs-3 pt-3">Current Image</p>
        </div>
       <div class="col-8">
        <div class="card">
            <h5 class="card-header">Edit Company</h5>
            <div class="card-body">

                <form action="{{ route('edit_company',$company->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{ $company->id }}">
                    <input type="hidden" name="old_image" value="{{ $company->image }}">
                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-name">Title</label>
                        <input type="text" name="title" value="{{ $company->title }}" placeholder="company title"
                            class="form-control @error('title') invalid @enderror">
                        @error('title')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-upload-file">Company Image</label>
                        <input name="image" type="file" class="form-control @error('image') invalid @enderror">
                        @error('image')
                            <div class="   invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-bio">Description</label>
                        <textarea name="description" class="form-control @error('description') invalid @enderror"
                            rows=" 3">{{ $company->description }}</textarea>
                        @error('description')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="switch switch-primary">
                            <input type="checkbox" name="is_active" {{ $company->is_active ? 'checked' : '' }}
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
@endsection
