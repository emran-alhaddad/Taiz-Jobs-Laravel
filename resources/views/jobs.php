<!DOCTYPE html>
<html lang="en">

<?php require_once("components/head.php"); ?>


<body>

<?php require_once("components/header.php"); ?>


<?php require_once("components/carosel.php"); ?>


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
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select filter" id="categoryFilter" aria-label="Floating label select example">
                                    <option value="0">All</option>
                                    <option value="Administration">Administration</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Computers/IT">Computers/IT</option>
                                    <option value="Consulting">Consulting</option>
                                    <option value="Development">Development</option>
                                    <option value="Education/Training">Education/Training</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Finance/Accounting">Finance/Accounting</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Legal/Law">Legal/Law</option>
                                    <option value="Logistics">Logistics</option>
                                    <option value="Sales/Marketing">Sales/Marketing</option>
                                    <option value="Security">Security</option>
                                    <option value="Others">Others</option>
                                </select>
                                <label for="categoryFilter">Category</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select filter" id="companyFilter" aria-label="Floating label select example">
                                    <option value="0">All</option>
                                    <option value="ACTED">ACTED</option>
                                    <option value="CAC Bank">CAC Bank</option>
                                    <option value="Confidential">Confidential</option>
                                    <option value="Creative Associates Int'l">Creative Associates Int'l</option>
                                    <option value="DRC">DRC</option>
                                    <option value="FMF">FMF</option>
                                    <option value="IBTCI">IBTCI</option>
                                    <option value="ICRC">ICRC</option>
                                    <option value="INTERSOS">INTERSOS</option>
                                    <option value="IOM">IOM</option>
                                    <option value="IRC">IRC</option>
                                    <option value="Islamic Relief">Islamic Relief</option>
                                    <option value="Others">Others</option>
                                </select>
                                <label for="companyFilter">Company</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select filter" id="cityFilter" aria-label="Floating label select example">
                                    <option value="0">All</option>
                                    <option value="Aden">Aden</option>
                                    <option value="Al-Dhala'e">Al-Dhala'e</option>
                                    <option value="Al-Kokhah">Al-Kokhah</option>
                                    <option value="Al-Mukha">Al-Mukha</option>
                                    <option value="Amran">Amran</option>
                                    <option value="Dhamar">Dhamar</option>
                                    <option value="Hadramout">Hadramout</option>
                                    <option value="Hajjah">Hajjah</option>
                                    <option value="Ibb">Ibb</option>
                                    <option value="Taiz">Taiz</option>
                                </select>
                                <label for="cityFilter">City</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating ">
                                <select class="form-select filter" id="jobTypeFilter">
                                    <option value="0">All</option>
                                    <option value="Graphics">Graphics</option>
                                    <option value="Web">Web</option>
                                    <option value="Android">Android</option>
                                    <option value="Desktop">Desktop</option>
                                    <option value="Marketting">Marketting</option>
                                </select>
                                <label for="jobTypeFilter">Type</label>
                            </div>
                        </div>
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
                                        <img class=" flex-shrink-0 img-fluid border rounded " src=" assets/images/com-logo-1.jpg " alt=" " style=" width: 80px; height: 80px; ">
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
                                    <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                        class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="job_details.html">View Details</a>
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
                                        <img class=" flex-shrink-0 img-fluid border rounded " src=" assets/images/com-logo-1.jpg " alt=" " style=" width: 80px; height: 80px; ">
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
                                    <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                        class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="job_details.html">View Details</a>
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
                                        <img class=" flex-shrink-0 img-fluid border rounded " src=" assets/images/com-logo-1.jpg " alt=" " style=" width: 80px; height: 80px; ">
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
                                    <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                        class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="job_details.html">View Details</a>
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
                                        <img class=" flex-shrink-0 img-fluid border rounded " src=" assets/images/com-logo-1.jpg " alt=" " style=" width: 80px; height: 80px; ">
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
                                    <div class=" col-sm-12 col-md-12 d-flex flex-column align-items-start  justify-content-center ">
                                        <div class=" d-flex mb-3 ">
                                            <a class=" btn btn-light btn-square me-3 " href=" "><i
                                                        class=" far fa-heart text-danger "></i></a>
                                            <a class=" btn btn-danger " href="job_details.html">View Details</a>
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


    <?php require_once("components/modals.php"); ?>

    
<?php require_once("components/footer.php"); ?>


<!-- Scripts  -->
<?php require_once("components/scripts.php"); ?>
</body>

</html>