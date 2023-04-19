<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">

<div id="banner-area" class="banner-area">
<img src="<?php echo base_url('assets/img/banner-mgi.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" aria-current="page">MGI ACADEMY</li>
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
        <img src="<?php echo base_url('assets/img/mgi-desk.png') ?>" class="img-responsive">
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
    </div>
  </div>
</section>

<section class="product">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title">
        <h2>PRODUK & LAYANAN</h2>
        <h1>MGI ACADEMY</h1>
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
                        <img src="<?php echo base_url('assets/img/teambuilding.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>TIM BUILDING</h3>
                        <p>Team kami akan menyuguhkan berbagai macam permainan yang bisa membangun kerjasama dan keakraban antar peserta team building. Tujuan team building ini akan membangkitkan rasa peduli, saling memberi, saling menghargai, dan saling memberi apresisasi</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/taripendet.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>TARI PENDET</h3>
                        <p>Keunikan budaya Indonesia berupa seni tari perlu di tampilkan untuk pembukaan dan pengisi setiap kegiatan. Para dancer MGI akan mengisi kegiatan anda dengan berbagai pilihan tari-tarian  tradisional dari berbagai daerah di seluruh wilayah Indonesia.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/Motivator.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>MOTIVATOR</h3>
                        <p>Motivator MGI akan memberikan pelatihan yang bertujuan untuk pengembangan diri, meningkatkan motivasi dalam diri, saling kerjasama, saling membantu. Dan berbagai macam hal-hal positif yang membawa dampak baik untuk peserta training.</p>
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

<section class="coach">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title">
                <h2>COACH</h2>
                <h1>TRAINER TALENT KAMI</h1>
            </div>
        </div>
        <?php
          foreach ($tim as $tim): ?>
        <div class="card-coach">
          <div class="row justify-content-center">
            <div class="col-sm-4">
              <img class="mr-3" src="<?php echo base_url('upload/homepage/'.$tim->image) ?>" alt="Generic placeholder image">
            </div>
            <div class="col-sm-8">
              <div class="card-coach-body">
                <h4 class="mt-0"><?php echo $tim->title ?></h4>
                <p><?php echo $tim->description ?></p>
              </div>
            </div>
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
