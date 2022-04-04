<!DOCTYPE html>
<html lang="en">

<?php require_once("components/head.php"); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <?php require_once("components/sidbar.php"); ?>


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Home -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fa-fw fas fa-house-user"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Account -->
            <li class="nav-item active ">
                <a class="nav-link" href="Account.html">
                    <i class="fa-fw fas fa-user-circle"></i>
                    <span>Account</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Skills -->
            <li class="nav-item active ">
                <a class="nav-link" href="Skills.html">
                    <i class="fa-fw fas fa-chart-line"></i>
                    <span>Skills</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Experience -->
            <li class="nav-item active active-tab">
                <a class="nav-link" href="Experience.html">
                    <i class="fa-fw fas fa-laptop-code"></i>
                    <span>Experience</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Education -->
            <li class="nav-item active fs-1">
                <a class="nav-link" href="Education.html">
                    <i class="fa-fw fas fa-user-graduate"></i>
                    <span>Education</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Courses -->
            <li class="nav-item active">
                <a class="nav-link" href="Courses.html">
                    <i class="fa-fw fas fa-chalkboard-teacher"></i>
                    <span>Courses</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <?php require_once("components/topbar.php"); ?>


                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->



                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require_once("components/footer.php"); ?>

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->

    <?php require_once("components/modals.php"); ?>


    <?php require_once("components/scripts.php"); ?>




</body>

</html>