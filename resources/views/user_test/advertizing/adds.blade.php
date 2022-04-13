@extends('admin.layout.master')
@section('adminContent')

    <div class="d-flex flex-row justify-content-end mb-3">
        <a class="btn btn-label-primary me-1 collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button"
            aria-expanded="false" aria-controls="collapseExample">
            Add New Advertizing
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
            <h5 class="card-header">Add New Advertizing</h5>
            <div class="card-body">

                <form action="{{ route('add_advertizing') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-name">URL</label>
                        <input type="url" name="url" value="{{ old('url') }}" placeholder="advertizing url"
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
                            rows=" 3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
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
        <h5 class="card-header">Avaliable Advertizings</h5>
        <div class="table-responsive ">
            <table class="table">
                <caption class="ms-4">List of Advertizings</caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>URL</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($advertizings->count())
                        @foreach ($advertizings as $advertizing)
                            <tr class="@if (!$advertizing->is_active) table-danger @endif">
                                <td>{{ $advertizing->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xl pull-up" title=""
                                            data-bs-original-title="{{ $advertizing->title }}">
                                            <img src="../uploads/advertizings/{{ $advertizing->image }}" alt="Avatar"
                                                class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td><a href="{{ $advertizing->url }}">{{ $advertizing->url }}</a></td>
                                <td>{{ $advertizing->description }}</td>
                                <td>{{ $advertizing->start_date }}</td>
                                <td>{{ $advertizing->end_date }}</td>


                                <td><span
                                        class="badge bg-label-{{ $advertizing->is_active ? 'primary' : 'danger' }} me-1">{{ $advertizing->is_active ? 'Active' : 'Not Active' }}</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-row justify-content-end mb-3">
                                        <a class="dropdown-item" href="{{ route('edit_advertizing', $advertizing->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                        </a>
                                        @if ($advertizing->is_active)
                                            <a class="dropdown-item deleteBtn" data-model-type="Advertizing"
                                                data-action-type="{{ route('delete_advertizing', $advertizing->id) }}"
                                                data-bs-toggle="modal" data-id="{{ $advertizing->id }}" href="#deleteModal"
                                                role="button" aria-expanded="false" aria-controls="deleteAdvertizing">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        @else
                                            <a href="#restoreModal" class="dropdown-item restoreBtn"
                                                data-model-type="Advertizing" data-bs-toggle="modal"
                                                data-action-type="{{ route('restore_advertizing', $advertizing->id) }}"
                                                data-id="{{ $advertizing->id }}">
                                                <i class='bx bx-rotate-left'></i></a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" class="text-center p-5 bg-warning text-white">
                                <p>There are no Advertizings yet !</p>
                            </td>
                        </tr>
                    @endif


                </tbody>
            </table>
        </div>
    </div>

@endsection
