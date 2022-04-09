<!DOCTYPE html>
<html lang="en">

@include('user.components.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('user.components.sidbar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('user.components.topbar')
                <!-- End of Topbar -->
                <!-- Begin Page Content -->

                @yield('user-dashboard')


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('user.components.footer')

            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->

    @include('user.components.modals')
    @include('user.components.scripts')


</body>

</html>
