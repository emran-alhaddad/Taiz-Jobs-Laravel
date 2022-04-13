@extends('admin.layout.master')
@section('adminContent')

    <div class="d-flex flex-row justify-content-end mb-3">
        <a class="btn btn-label-primary me-1 collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button"
            aria-expanded="false" aria-controls="collapseExample">
            Add New Partener
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
            <h5 class="card-header">Add New Partener</h5>
            <div class="card-body">

                <form action="{{ route('add_partener') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-name">Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" placeholder="partener title"
                            class="form-control @error('title') invalid @enderror">
                        @error('title')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-upload-file">Partener Image</label>
                        <input name="image" type="file" class="form-control @error('image') invalid @enderror">
                        @error('image')
                            <div class="   invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="bs-validation-bio">URL</label>
                        <input type="url" name="url" value="{{ old('url') }}" placeholder="partener url"
                            class="form-control @error('url') invalid @enderror">
                        @error('url')
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
        <h5 class="card-header">Avaliable Parteners</h5>
        <div class="table-responsive ">
            <table class="table">
                <caption class="ms-4">List of Compnies</caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($parteners->count())
                        @foreach ($parteners as $partener)
                            <tr class="@if (!$partener->is_active) table-danger @endif">
                                <td>{{ $partener->id }}</td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xl pull-up" title=""
                                            data-bs-original-title="{{ $partener->title }}">
                                            <img src="../uploads/parteners/{{ $partener->image }}" alt="Avatar"
                                                class="rounded-circle">
                                        </li>
                                    </ul>
                                </td>
                                <td><strong>{{ $partener->title }}</strong></td>
                                <td>{{ $partener->url }}</td>

                                <td><span
                                        class="badge bg-label-{{ $partener->is_active ? 'primary' : 'danger' }} me-1">{{ $partener->is_active ? 'Active' : 'Not Active' }}</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-row justify-content-end mb-3">
                                        <a class="dropdown-item" href="{{ route('edit_partener', $partener->id) }}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                        </a>
                                        @if ($partener->is_active)
                                            <a class="dropdown-item deleteBtn" data-model-type="Partener"
                                                data-action-type="{{ route('delete_partener', $partener->id) }}"
                                                data-bs-toggle="modal" data-id="{{ $partener->id }}" href="#deleteModal"
                                                role="button" aria-expanded="false" aria-controls="deletePartener">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        @else
                                            <a href="#restoreModal" class="dropdown-item restoreBtn"
                                                data-model-type="Partener" data-bs-toggle="modal"
                                                data-action-type="{{ route('restore_partener', $partener->id) }}"
                                                data-id="{{ $partener->id }}">
                                                <i class='bx bx-rotate-left'></i></a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" class="text-center p-5 bg-warning text-white">
                                <p>There are no Parteners yet !</p>
                            </td>
                        </tr>
                    @endif


                </tbody>
            </table>
        </div>
    </div>

@endsection
