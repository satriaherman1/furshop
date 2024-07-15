<!-- <div class="navbartop">
  <a href="" class="confirm">Konfirmasi Pembayaran</a>
  <a href="">Daftar</a>
  <a href="">Masuk</a>
</div> -->
<?php if($this->session->userdata('login')){ ?>
  <?php
  $user = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
  $cart = $this->db->get_where('cart', ['user' => $this->session->userdata('id')]);
  $order = $this->db->get_where('invoice', ['user' => $this->session->userdata('id'), 'status !=' => 4]);
  ?>
<?php } ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: <?= $this->config->item('navbar_color'); ?>">
  <div class="container">
    <a class="navbar-brand mr-5" href="<?= base_url(); ?>"><h3><?= $this->config->item('app_name'); ?></h3></a>

    <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>">Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdownCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori
          </a>
          <?php $categories = $this->Categories_model->getCategories(); ?>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownCategories">
            <?php foreach($categories->result_array() as $cat): ?>
              <a class="dropdown-item" href="<?= base_url(); ?>c/<?= $cat['slug']; ?>"><?= $cat['name']; ?></a>
            <?php endforeach; ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?= base_url(); ?>testimoni">Testimoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="<?= base_url(); ?>payment/confirmation">Konfirmasi Pembayaran</a>
        </li>
      </ul>
      <br>
      <div>

        
      </div>
      <?php if($this->session->userdata('login')){ ?>
        <a href="<?= base_url(); ?>cart" class="text-light navbar-cart-inform">
          <i class="fa fa-shopping-cart"></i>
          <?php if($cart->num_rows() > 0){ ?>
            Cart(<?= $cart->num_rows(); ?>)
          <?php }else{ ?>
            Cart
          <?php } ?>
        </a>
        <br>
        <br>
        <br>
      <?php } ?>
    </div>

    <?php if($this->session->userdata('login')){ ?>
    <div>
      <i class="fa text-light ml-3 icon-search-navbar fa-search"></i>
      <img src="<?= base_url(); ?>assets/images/profile/<?= $user['photo_profile']; ?>" class="photo-profile-mobile" alt="Photo Profile <?= $user['name']; ?>" class="photo" data-toggle="dropdown" id="dropdownPhotoProfileNavbarMobile" aria-haspopup="true" aria-expanded="false">
      <div class="dropdown-menu dropdownPhotoProfileNavbarMobile" aria-labelledby="dropdownPhotoProfileNavbarMobile">
        <a class="dropdown-item" href="<?= base_url(); ?>profile">Dashboard</a>
        <a class="dropdown-item" href="<?= base_url(); ?>cart">
        <?php if($cart->num_rows() > 0){ ?>
            Keranjang(<?= $cart->num_rows(); ?>)
          <?php }else{ ?>
            Keranjang
          <?php } ?>
        </a>
        <?php if($order->num_rows() > 0){ ?>
          <a class="dropdown-item" href="<?= base_url(); ?>profile/transaction">Transaksi <small class="badge badge-sm badge-info"><?= $order->num_rows(); ?></small></a>
        <?php }else{ ?>
          <a class="dropdown-item" href="<?= base_url(); ?>profile/transaction">Transaksi</a>
        <?php } ?>
        <a class="dropdown-item" href="<?= base_url(); ?>profile/histories">Riwayat Transaksi</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?= base_url(); ?>payment/confirmation">Konfirmasi Pembayaran</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?= base_url(); ?>profile/edit-profile">Edit Profil</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?= base_url(); ?>logout">Keluar</a>
      </div>
    </div>
    <?php }else{ ?>
      <div>
      <i class="fa text-light mr-3 icon-search-navbar fa-search"></i>
        <a href="<?= base_url(); ?>login" class="btn btn-sm btn-outline-light ml-2"><i class="fa fa-sign-in-alt"></i> Masuk</a>
      </div>
    <?php } ?>

  </div>
</nav>
<div class="search-form">
  <i class="fa fa-times"></i>
  <form action="<?= base_url(); ?>search" method="get">
    <input type="text" placeholder="Cari produk" autocomplete="off" name="q"><!--
    --><button type="submit">Cari</i></button>
  </form>
</div>
<div class="top-nav"></div>
