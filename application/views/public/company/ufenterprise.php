<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">

<div id="banner-area" class="banner-area">
<img src="<?php echo base_url('assets/img/banner-uf.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" aria-current="page">UF ENTERPRISE</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 


<section class="about-mantiko" id="about-mantiko">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <img src="<?php echo base_url('assets/img/uf-deskripsi.png') ?>" class="img-responsive">
      </div>
      <?php 
          foreach ($about as $about): ?>
      <div class="col-sm-7">
        <div class="logo">
          <img src="<?php echo base_url('upload/homepage/'.$about->image) ?>" class="img-responsive">     
        </div>
        <p><?php echo $about->description ?></p>
      </div>
      <?php endforeach; ?>
      <div class="col-sm-12">
        <p><?php echo $about->description2 ?></p>
      </div>
    </div>
  </div>
</section>

<section class="product">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title">
        <h2>PRODUK & LAYANAN</h2>
        <h1>UF ENTERPRISE</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#blogCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Carousel Inner -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/weddingmanagement.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>WEDDING MANAGEMENT CREW</h3>
                        <p>Dengan crew yang memiliki jam terbang tinggi, UF Enterprise siap untuk mewujudkan resepsi pernikahan para anak muda di Jabodetabek. Mulai dari menata rentetan susunan acara, Proses pemilihan vendor Busana, Rias, Catering, Foto & Video , entertaintment dan lainnya, hingga mengatur jalannya acara dengan sukses di hari H.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/dekorasi.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>DEKORASI & PELAMINAN</h3>
                        <p>Dekorasi menjadi point penting dalam sebuah pernikahan, UF Enterprise memilki dekorasi dan siap menyesuaikan konsep rancangan para calon pengantin. Tentunya dengan berbagai pilihan budget dan Ukuran.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- End of carousel inner -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="team">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title">
        <h2>TIM KAMI</h2>
        <hr>
      </div>
    </div>
    <div class="row justify-content-center">
    <?php
            // foreach ($product->result() as $row) {
        foreach ($tim as $tim): ?>
      <div class="col-sm-4">
        <div class="avatar">
          <img src="<?php echo base_url('upload/homepage/'.$tim->image) ?>" class="img-responsive">
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<section class="galeri" id="galeri">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title">
        <h2>GALERI</h2>
        <h1>Galeri Kegiatan Kami</h1>
        <hr>
      </div>
    </div> 
    <div class="row">
    <?php
        // foreach ($product->result() as $row) {
        foreach ($gallery as $gallery): ?>
      <div class="col-sm-3">
        <div class="thumbnail">
          <div class="thumbnail-img">
            <a href="#">
              <img class="img-responsive" src="<?php echo base_url('upload/image/'.$gallery->photo) ?>">
            </a>
            <div class="thumbnail-body">
              <h4 class="title"><a href="#"><?php echo $gallery->title ?></a></h4>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div> 
  </div>
</section>