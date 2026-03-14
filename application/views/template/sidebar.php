<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-bullhorn"></i>
</div>
<div class="sidebar-brand-text mx-3">SI Reklame</div>
</a>

<hr class="sidebar-divider">

<li class="nav-item">
<a class="nav-link" href="<?= base_url('dashboard') ?>">
<i class="fas fa-fw fa-tachometer-alt"></i>
<span>Dashboard</span>
</a>
</li>

<?php if($this->session->userdata('role') == 'admin'){ ?>

<hr class="sidebar-divider">

<div class="sidebar-heading">
Master Data
</div>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('pelanggan') ?>">
<i class="fas fa-users"></i>
<span>Pelanggan</span>
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('jenis_reklame') ?>">
<i class="fas fa-ad"></i>
<span>Jenis Reklame</span>
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('lokasi') ?>">
<i class="fas fa-map-marker-alt"></i>
<span>Lokasi Reklame</span>
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('lokasi/map') ?>">
<i class="fas fa-map"></i>
<span>Map Lokasi Reklame</span>
</a>
</li>
<?php } ?>

<?php if($this->session->userdata('role') == 'admin'){ ?>

<hr class="sidebar-divider">

<div class="sidebar-heading">
Transaksi
</div>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('pemesanan') ?>">
<i class="fas fa-shopping-cart"></i>
<span>Pemesanan Reklame</span>
</a>
</li>

<?php } ?>

<?php if($this->session->userdata('role') == 'produksi'){ ?>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('produksi') ?>">
<i class="fas fa-industry"></i>
<span>Produksi</span>
</a>
</li>

<?php } ?>

<?php if($this->session->userdata('role') == 'pemasangan'){ ?>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('pemasangan') ?>">
<i class="fas fa-tools"></i>
<span>Pemasangan</span>
</a>
</li>

<?php } ?>

<?php if($this->session->userdata('role') == 'keuangan'){ ?>

<li class="nav-item">
<a class="nav-link" href="<?= base_url('pembayaran') ?>">
<i class="fas fa-money-bill"></i>
<span>Pembayaran</span>
</a>
</li>

<?php } ?>

<hr class="sidebar-divider">

<li class="nav-item">
<a class="nav-link" href="<?= base_url('auth/logout') ?>">
<i class="fas fa-sign-out-alt"></i>
<span>Logout</span>
</a>
</li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">