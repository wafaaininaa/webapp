<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <!-- <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li> -->

     <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/form/add') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Registrasi Pegawai</span>
        </a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/form/') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pegawai</span>
        </a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/absen/') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Absen Pegawai</span>
        </a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/map/') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Posisi Pegawai</span>
        </a>
    </li>

    <!-- <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'form' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Products</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/form/add') ?>">Registrasi</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/form') ?>">Data Pegawai</a>
        </div>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>