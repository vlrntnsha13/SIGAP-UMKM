<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Lihat Profil Anda</span></a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'musaha' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Usaha Anda</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('member/musaha/add') ?>">Tambah Usaha</a>
            <a class="dropdown-item" href="<?php echo site_url('member/musaha') ?>">Daftar Usaha</a>
        </div>

    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'mgaleri' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Galeri</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('member/mgaleri/add') ?>">Tambah Galeri</a>
            <a class="dropdown-item" href="<?php echo site_url('member/mgaleri') ?>">Lihat Galeri</a>
        </div>
    <!--<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kategori</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/kategori/add') ?>">Tambah Kategori</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/kategori') ?>">Daftar Kategori</a>
        </div>
    </li> 
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kecamatan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/kecamatan/add') ?>">Tambah Kecamatan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/kecamatan') ?>">Daftar Kecamatan</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kategori' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Kelurahan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/kelurahan/add') ?>">Tambah kelurahan</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/kelurahan') ?>">Daftar kelurahan</a>
        </div>
    </li>-->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>