<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center flex-column  justify-content-center px-2 py-3" href="{{ route('show_user_home') }}">
    <div class="sidebar-brand-icon mb-2">
        <img src="{{ asset('user_assets/img/myPhoto.jpg')}}" alt="myphoto" class="img-fluid rounded-circle">
    </div>
    <div class="sidebar-brand-text mx-0">Emran Al-Haddad </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Home -->
<li class="nav-item active active-tab">
    <a class="nav-link" href="{{ route('show_user_home') }}">
        <i class="fa-fw fas fa-house-user"></i>
        <span>Home</span></a>

</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Account -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('show_user_account') }}">
        <i class="fa-fw fas fa-user-circle"></i>
        <span>Account</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Skills -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('show_user_skills') }}">
        <i class="fa-fw fas fa-chart-line"></i>
        <span>Skills</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Experience -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('show_user_experiences') }}">
        <i class="fa-fw fas fa-laptop-code"></i>
        <span>Experience</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Education -->
<li class="nav-item active fs-1">
    <a class="nav-link" href="{{ route('show_user_education') }}">
        <i class="fa-fw fas fa-user-graduate"></i>
        <span>Education</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Courses -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('show_user_courses') }}">
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
