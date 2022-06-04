<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
      <img src="<?= base_url() ?>assets/slider/splus.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>template/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_user') ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
        <a href="<?= base_url('admin') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin'){
                                                              echo"active";
                                                              } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
          <a href="<?= base_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori'){
                                                              echo"active";
                                                              } ?>">

              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li> -->

          <li class="nav-item  ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?= base_url('kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kategori'){
                                                              echo"active";
                                                              } ?>">
                  <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('sub_kategori') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'sub_kategori'){
                                                              echo"active";
                                                              } ?>">
                  <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                  <p>Sub Kategori</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('kelas') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'kelas'){
                                                              echo"active";
                                                              } ?>">
                  <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                  <p>Class</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('supplier') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'supplier'){
                                                              echo"active";
                                                              } ?>">
                  <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <!-- <li class="nav-item">
              <a href="<?= base_url('barang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang'){
                                                              echo"active";
                                                              } ?>">
                  <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                  <p>Produk</p>
                </a>  
              </li> -->
              </ul>
              </li>

          <li class="nav-item">
          <a href="<?= base_url('barang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'barang'){
                                                              echo"active";
                                                              } ?>">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Produk/Barang
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a href="<?= base_url('gambarbarang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'gambarbarang'){
                                                              echo"active";
                                                              } ?>">
              <i class="nav-icon fas fa-dice"></i>
              <p>
                Gambar Produk/Barang
              </p>
            </a>
          </li>
          
         
            <li class="nav-item">
            <a href="<?= base_url('user') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'user')
              {
                echo "active";
              
              } ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                user
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="<?= base_url('auth/logout_user') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign"></i>
              <p>
                log out
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
            </li>

          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
 <div class="content">
      <div class="container-fluid">
        <div class="row">