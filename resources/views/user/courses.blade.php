@extends('user.layout.master')
@section('user-dashboard')
<div class="container-fluid">
    <div class="row ">
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">GIT</h5>
                        <img src="{{ asset('user_assets/img/skills/git.jpg') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>97% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 97%;"></div>
                    </div>
                </div>
                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">GitHub</h5>
                        <img src="{{ asset('user_assets/img/skills/github.png') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>85% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                    </div>
                </div>

                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">HTML5</h5>
                        <img src="{{ asset('user_assets/img/skills/html.jpg') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>95% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                    </div>
                </div>

                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">CSS3</h5>
                        <img src="{{ asset('user_assets/img/skills/css.png') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>90% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                    </div>
                </div>
                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">JavaScript</h5>
                        <img src="{{ asset('user_assets/img/skills/js.jpg') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>80% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                    </div>
                </div>
                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">BootStrap</h5>
                        <img src="{{ asset('user_assets/img/skills/bootstrap.png') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>75% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                    </div>
                </div>
                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">JQuery</h5>
                        <img src="{{ asset('user_assets/img/skills/JQuery.png') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>45% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                    </div>
                </div>

                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">MYSQL</h5>
                        <img src="{{ asset('user_assets/img/skills/mysql.jpg') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>97% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 97%;"></div>
                    </div>
                </div>

                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->

            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-cherry position-relative">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4 text-center">
                        <h5 class="card-title mb-3">PHP</h5>
                        <img src="{{ asset('user_assets/img/skills/php.png') }}" class="img-fluid w-75 rounded-circle" alt="">
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                Native
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>92% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="100%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 92%;"></div>
                    </div>
                </div>
                <!-- ---------------- arrow btn menue------------------  -->

                <div class="dropdown no-arrow mx-1 position-absolute" style="top:10px; right: 10px;">
                    <a role="button" class="text-light dropdown-toggle" id="optionsMenue" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v" style="font-size: 1.5em;"></i></a>
                    <ul class="dropdown-list dropdown-menu  shadow animated--grow-in" aria-labelledby="optionsMenue">
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#addSkill">
                                <i class="far fa-edit text-primary"></i>
                                <span class="d-inline-block"> Edit</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#deleteModal">
                                <i class="far fa-trash-alt text-danger"></i>
                                <span class="d-inline-block"> Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!----- -->
            </div>
        </div>
    </div>
</div>
@endsection
