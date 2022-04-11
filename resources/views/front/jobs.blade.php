@extends('front.layout.master')
@section('front-content')
    @include('front.components.carosel')

    <div class="container">
        <div class="row">

            <div class="row mb-3">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="form-floating flex-fill">
                            <input type="search" class="form-control" id="searchByName">
                            <label for="searchByName">Search By Name</label>
                        </div>
                        <button class="btn btn-outline-danger" type="button"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        @if ($categories->count())
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select filter" name="category" id="categoryFilter"
                                        aria-label="Floating label select example">
                                        <option value="" selected disabled>All</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="categoryFilter">Category</label>
                                </div>
                            </div>
                        @endif
                        @if ($companies->count())
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select filter" name="company" id="companyFilter"
                                        aria-label="Floating label select example">
                                        <option value="" selected disabled>All</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="companyFilter">Company</label>
                                </div>
                            </div>
                        @endif
                        @if ($cities->count())
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select filter" name="city" id="cityFilter"
                                        aria-label="Floating label select example">
                                        <option value="" selected disabled>All</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="cityFilter">Company</label>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <hr class="row">
            <div class="col">

                <!-- Jobs Start -->
                <div class=" container-xxl ">
                    <h1 class=" text-center mb-5 ">Avaliable Jobs</h1>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 " id="all-jobs">

                        <div class="mb-4">
                            <div class="job-item p-4 m-1">
                                <div class=" row g-4 ">
                                    <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                        <img class=" flex-shrink-0 img-fluid border rounded "
                                            src=" front_assets/images/com-logo-1.jpg " alt=" "
                                            style=" width: 80px; height: 80px; ">
                                        <div class=" text-start ps-4 ">
                                            <h5 class=" mb-3 job-name">Senior ICT Officer</h5>

                                            <span class=" text-truncate me-3 mark fw-bold ps-0">
                                                <i class=" fas fa-list-alt text-danger me-2 "></i>
                                                <span class="job-category ">Computers/IT</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fas fa-building text-danger me-2 "></i>
                                                <span class="job-company">Confidential</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fa fa-map-marker-alt text-danger me-2 "></i>
                                                <span class="job-location">Taiz</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                    class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                        </div>
                                        <small class=" text-truncate "><i
                                                class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 13 Feb,
                                            2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="job-item p-4 m-1">
                                <div class=" row g-4 ">
                                    <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                        <img class=" flex-shrink-0 img-fluid border rounded "
                                            src=" front_assets/images/com-logo-1.jpg " alt=" "
                                            style=" width: 80px; height: 80px; ">
                                        <div class=" text-start ps-4 ">
                                            <h5 class=" mb-3 job-name">Team Leader</h5>

                                            <span class=" text-truncate me-3 mark fw-bold ps-0">
                                                <i class=" fas fa-list-alt text-danger me-2 "></i>
                                                <span class="job-category ">Development</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fas fa-building text-danger me-2 "></i>
                                                <span class="job-company">CAC Bank</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fa fa-map-marker-alt text-danger me-2 "></i>
                                                <span class="job-location">Taiz</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                    class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                        </div>
                                        <small class=" text-truncate "><i
                                                class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 13 Feb,
                                            2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="job-item p-4 m-1">
                                <div class=" row g-4 ">
                                    <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                        <img class=" flex-shrink-0 img-fluid border rounded "
                                            src=" front_assets/images/com-logo-1.jpg " alt=" "
                                            style=" width: 80px; height: 80px; ">
                                        <div class=" text-start ps-4 ">
                                            <h5 class=" mb-3 job-name">Senior ICT Officer</h5>

                                            <span class=" text-truncate me-3 mark fw-bold ps-0">
                                                <i class=" fas fa-list-alt text-danger me-2 "></i>
                                                <span class="job-category ">Computers/IT</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fas fa-building text-danger me-2 "></i>
                                                <span class="job-company">Confidential</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fa fa-map-marker-alt text-danger me-2 "></i>
                                                <span class="job-location">Aden</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                    class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                        </div>
                                        <small class=" text-truncate "><i
                                                class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 13 Feb,
                                            2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="job-item p-4 m-1">
                                <div class=" row g-4 ">
                                    <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                        <img class=" flex-shrink-0 img-fluid border rounded "
                                            src=" front_assets/images/com-logo-1.jpg " alt=" "
                                            style=" width: 80px; height: 80px; ">
                                        <div class=" text-start ps-4 ">
                                            <h5 class=" mb-3 job-name">Team Leader</h5>

                                            <span class=" text-truncate me-3 mark fw-bold ps-0">
                                                <i class=" fas fa-list-alt text-danger me-2 "></i>
                                                <span class="job-category ">Development</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fas fa-building text-danger me-2 "></i>
                                                <span class="job-company">CAC Bank</span>
                                            </span>
                                            <span class=" text-truncate me-3 ">
                                                <i class=" fa fa-map-marker-alt text-danger me-2 "></i>
                                                <span class="job-location">Aden</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                    class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="{{ route('job_details') }}">View
                                                Details</a>
                                        </div>
                                        <small class=" text-truncate "><i
                                                class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 13 Feb,
                                            2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Jobs End -->

            </div>
        </div>
    </div>
@endsection
