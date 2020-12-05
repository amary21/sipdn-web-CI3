<title>Admin</title>
</head>

<body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none">
            <a class="c-sidebar-brand-full">
                <svg width="46" height="46" alt="CoreUI Logo">
                    <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-education"></use>
                </svg> SIPDN
            </a>
            <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-education"></use>
            </svg>
        </div>
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'dashboard') echo 'c-active' ?>" href="<?= base_url('admin/dashboard') ?>">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg><b> Dashboard</b></a></li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/brand.svg#cib-buffer"></use>
                    </svg> Master Data</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'user') echo 'c-active' ?>" href="<?= base_url('admin/user') ?>"> Users</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'guru') echo 'c-active' ?>" href="<?= base_url('admin/guru') ?>"> Guru</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'kelas') echo 'c-active' ?>" href="<?= base_url('admin/kelas') ?>"> Kelas</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'siswa') echo 'c-active' ?>" href="<?= base_url('admin/siswa') ?>"> Siswa</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'mata pelajaran') echo 'c-active' ?>" href=""> Mata Pelajaran</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'tahun ajaran') echo 'c-active' ?>" href=""> Tahun Ajaran</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'guru mapel') echo 'c-active' ?>" href=""> Guru Mata Pelajaran</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link <?php if ($menu == 'kelas mengajar') echo 'c-active' ?>" href=""> Kelas Mengajar</a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-education"></use>
                    </svg> Pengolahan Data</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI
                            Icons<span class="badge badge-success">Free</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI
                            Icons - Brand</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons
                            - Flag</a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                    </svg> Laporan</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI
                            Icons<span class="badge badge-success">Free</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI
                            Icons - Brand</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons
                            - Flag</a></li>
                </ul>
            </li>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button><a class="c-header-brand d-lg-none" href="#">
                <svg width="46" height="46" alt="CoreUI Logo">
                    <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-education"></use>
                </svg> SIPDN</a>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
            <!-- <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
      </ul> -->
            <ul class="c-header-nav ml-auto mr-4">
                <li class="c-header-nav-item d-md-down-none mx-2">
                    <svg class="c-icon">
                    </svg>Hello, Admin</li>
                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img" src="<?= base_url() ?>assets/img/avatars/undraw_profile.svg" alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <a class="dropdown-item" href="#">
                            <svg class="c-icon mr-2">
                                <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg> Profile</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <svg class="c-icon mr-2">
                                <use xlink:href="<?= base_url() ?>assets/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Logout</a>
                    </div>
                </li>
            </ul>
            <div class="c-subheader px-3">
                <!-- Breadcrumb-->
                <ol class="breadcrumb border-0 m-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item"><a href="#"></a>Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    <!-- Breadcrumb Menu-->
                </ol>
            </div>
        </header>
        <div class="c-body">
            <main class="c-main">

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda ingin Logout?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>