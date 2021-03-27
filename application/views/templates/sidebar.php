<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">VoteUmi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- QUERY MENU -->




    <!-- SIAPKAN SUB-MENU SESUAI MENU -->

    <li class="nav-item active">
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin/pemilih'); ?>">
            <i class="fas fa-fw fa-user-edit "></i>
            <span>Pemilih</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin/kandidat'); ?>">
            <i class=" fas fa-fw fa-user"></i>
            <span>Kandidat</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('auth/petugas'); ?>">
            <i class=" fas fa-fw fa-users"></i>
            <span>Petugas</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin/perolehan'); ?>">
            <i class=" fas fa-fw fa-users"></i>
            <span>Perolehan Suara</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin/suara'); ?>">
            <i class=" fas fa-fw fa-key"></i>
            <span>Suara</span></a>
    </li>

    <hr class="sidebar-divider mt-3">


    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>