@extends('admin.layout.master')
@section('adminContent')

<div class="d-flex flex-row justify-content-end mb-3">
    <a class="btn btn-label-primary me-1 collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Add New Service
      </a>
</div>

<div class="collapse" id="collapseExample" style="">
    <div class="card">
        <h5 class="card-header">Add New Service</h5>
        <div class="card-body">
          <form action="/admin/services/add" class="needs-validation">
            <div class="mb-3">
              <label class="form-label" for="bs-validation-name">Title</label>
              <input type="text" class="form-control" id="bs-validation-name" placeholder="company title" required="">
              <div class="valid-feedback"> Looks good! </div>
              <div class="invalid-feedback"> Please Service title </div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="bs-validation-upload-file">Service Image</label>
              <input type="file" class="form-control" id="bs-validation-upload-file" required="">
            </div>

            <div class="mb-3">
              <label class="form-label" for="bs-validation-bio">Description</label>
              <textarea class="form-control" id="bs-validation-bio" name="bs-validation-bio" rows="3" required=""></textarea>
            </div>
            <div class="mb-3">
              <label class="switch switch-primary">
                <input type="checkbox" class="switch-input" required="">
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
    <h5 class="card-header">Avaliable Services</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">List of Compnies</caption>
        <thead>
          <tr>
              <th>#</th>
            <th>Images</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>1</td>
            <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Sophia Wilkerson">
                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Christina Parker">
                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                  </li>
                </ul>
              </td>
            <td><strong>Service Name</strong></td>
            <td>Service Description</td>

            <td><span class="badge bg-label-primary me-1">Active</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
@endsection
