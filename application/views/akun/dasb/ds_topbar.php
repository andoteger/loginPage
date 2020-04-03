<!-- topbar -->
<nav class="navbar navbar-expand-lg shadow navbar-light">
    <img class="icon" src="<?= base_url(); ?>asset/img/icon.png" type="button" data-toggle="collapse" data-target="#navbarToggler">

    <div class="row mr-auto">
        <div class="col">

        </div>
    </div>
    <div class="topbar-divider d-none d-sm-block" style="border-right: 1px solid #ccc; height: 2rem ; margin: auto 1rem;"></div>

    <span class="dropdown no-arrow">
        <a class="dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown">
            <span class="name mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'];  ?></span>
            <!-- <img class="img-profile rounded-circle" src="<?= 'asset/img/profile/' . $user['image'] ?>"> -->
            <img class="img-profile rounded-circle" src="<?php echo base_url('asset/img/profile/' . $user['image']) ?>">

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                <a class="dropdown-item" href="<?= base_url(); ?>dashboard/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url(); ?>akun/logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
    </span>

</nav>

<div class="collapse navbar-collapse" id="navbarToggler">
    <div class="container">
        <div class="row navigasi pt-0">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- topbar -->