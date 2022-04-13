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

    <div class="row {{ !$advertizing->is_active ? 'alert-danger' : '' }}">
        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('uploads/advertizings') . '/' . $advertizing->image }}" class="img-fluid" alt="">
            <p class="fs-3 pt-3">Current Image</p>
        </div>
        <div class="col-8">
            <div class="card">
                <h5 class="card-header">Edit Advertizing</h5>
                <div class="card-body">

                    <form action="{{ route('edit_advertizing', $advertizing->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ $advertizing->id }}">
                        <input type="hidden" name="old_image" value="{{ $advertizing->image }}">
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">URL</label>
                            <input type="url" name="url" value="{{ $advertizing->url }}" placeholder="advertizing url"
                                class="form-control @error('url') invalid @enderror">
                            @error('url')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Advertizing Image</label>
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
                                rows=" 3">{{ $advertizing->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" name="start_date" value="{{ $advertizing->start_date }}"
                                    id="start_date" class="form-control @error('start_date') invalid @enderror">
                                @error('start_date')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" name="end_date" value="{{ $advertizing->end_date }}"
                                    id="end_date" class="form-control @error('end_date') invalid @enderror">
                                @error('end_date')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="switch switch-primary">
                                <input type="checkbox" name="is_active" {{ $advertizing->is_active ? 'checked' : '' }}
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
