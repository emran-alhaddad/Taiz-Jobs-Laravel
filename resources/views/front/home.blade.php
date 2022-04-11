@extends('front.layout.master')
@section('front-content')
@include("front.components.carosel")

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-2 col-sm-12 order-last order-lg-first  mb-0 mb-sm-3 pb-3 position-sticky top-0 " style="border-radius: 25%; height: fit-content;">
                <h3 class="text-danger text-start mb-5 fs-4">Adds Section</h3>
                <div class="row row-cols-3 row-cols-lg-2 row-cols-md-4 row-cols-sm-3 border-1 border-end border-danger ">
                    <figure class=" figure mb-5">
                        <img src="{{ asset('front_assets/images/Adds (1).jpg') }}" class=" figure-img rounded img-fluid " alt=" ... ">
                        <figcaption class=" figure-caption ">A caption for the above image.</figcaption>
                    </figure>

                    <figure class=" figure mb-5">
                        <img src="{{ asset('front_assets/images/Adds (1).jpg ') }}" class=" figure-img rounded img-fluid " alt=" ... ">
                        <figcaption class=" figure-caption ">A caption for the above image.</figcaption>
                    </figure>
                    <figure class=" figure mb-5">
                        <img src="{{ asset('front_assets/images/Adds (1).jpg ') }}" class=" figure-img rounded img-fluid " alt=" ... ">
                        <figcaption class=" figure-caption ">A caption for the above image.</figcaption>
                    </figure>

                    <figure class=" figure mb-5">
                        <img src="front_assets/images/Adds (1).jpg " class=" figure-img rounded img-fluid " alt=" ... ">
                        <figcaption class=" figure-caption ">A caption for the above image.</figcaption>
                    </figure>
                    <figure class=" figure mb-5">
                        <img src="front_assets/images/Adds (1).jpg " class=" figure-img rounded img-fluid " alt=" ... ">
                        <figcaption class=" figure-caption ">A caption for the above image.</figcaption>
                    </figure>

                    <figure class=" figure mb-5">
                        <img src="front_assets/images/Adds (1).jpg " class=" figure-img rounded img-fluid " alt=" ... ">
                        <figcaption class=" figure-caption ">A caption for the above image.</figcaption>
                    </figure>

                </div>
            </div>

            <div class=" col-lg-10 col-sm-12 pb-3 order-first order-lg-last">
                <!-- Jobs Start -->
                <div class=" container-xxl ">
                    <h1 class=" text-center mb-5 ">Latest Jobs</h1>
                    <div class=" tab-class text-center ">
                        <div class="row row-cols-1 row-cols-lg-2">

                            <div class="mb-4">
                                <div class="job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-1.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Software Engineer</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class=" job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-2.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Marketing Manager</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class=" job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-3.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Product Designer</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class=" job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-2.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Marketing Manager</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-1.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Software Engineer</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class=" job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-2.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Marketing Manager</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class=" job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-3.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Product Designer</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class=" job-item p-4 m-1">
                                    <div class=" row g-4 ">
                                        <div class=" col-sm-12 col-md-12  d-flex align-items-center ">
                                            <img class=" flex-shrink-0 img-fluid border rounded " src=" front_assets/images/com-logo-2.jpg " alt=" " style=" width: 80px; height: 80px; ">
                                            <div class=" text-start ps-4 ">
                                                <h5 class=" mb-3 ">Marketing Manager</h5>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" fa fa-map-marker-alt text-danger me-2 "></i>New York,
                                                            USA</span>
                                                <span class=" text-truncate me-3 "><i
                                                                class=" far fa-clock text-danger me-2 "></i>Full Time</span>
                                                <span class=" text-truncate me-0 "><i
                                                                class=" far fa-money-bill-alt text-danger me-2 "></i>$123 -
                                                            $456</span>
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                            <div class=" d-flex mb-3 ">
                                                <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                                class=" far fa-heart text-danger "></i></a>
                                                <a class=" btn btn-danger " href="{{ route('job_details') }}">View Details</a>
                                            </div>
                                            <small class=" text-truncate "><i
                                                            class=" far fa-calendar-alt text-danger me-2 "></i>Date Line: 01 Jan,
                                                        2045</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class=" btn btn-danger py-3 px-5 w-75" href="jobs.html">Find More Jobs</a>
                    </div>
                </div>
                <!-- Jobs End -->
            </div>
        </div>

        <div class="row" style=" box-shadow: 0px 1px 2px; ">
            <div class=" col ">
                <!--====== CLIENT LOGO PART START ======-->
                <section class=" client-logo-area client-logo-one ">
                    <!--======  Start Section Title Two ======-->
                    <div class=" section-title-two ">
                        <div class=" container ">
                            <div class=" row ">
                                <div class=" col-12 ">
                                    <div class=" content ">
                                        <h2 class=" fw-bold ">Our Partners</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- container -->
                    </div>
                    <!--====== End Section Title Two ======-->
                    <div class=" container ">
                        <div class=" row text-center ">
                            @if ($parteners->count())
                                @foreach ($parteners as $partener )
                                <div class=" col-lg-3 col-md-4 col-sm-12 ">
                                    <div class=" single-client text-center ">
                                        <a href="{{ $partener->url }}">
                                        <img class="w-50" src="{{asset('uploads/parteners').'/'.$partener->image}}" alt=" Logo " />
                                    </a>
                                    </div>
                                    <!-- single client -->
                                </div>
                                @endforeach
                            @endif

                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </section>
                <!--====== CLIENT LOGO PART ENDS ======-->
            </div>
        </div>
    </div>
@endsection
