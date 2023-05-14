<link href="<?php echo base_url('assets/css/company.css') ?>" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div id="banner-area" class="banner-area">
  <img src="<?php echo base_url('assets/img/banner-kako.png'); ?>" class="img-responsive">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">PRODUCT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                      <li class="breadcrumb-item"><a href="#">PRODUCT</a></li>
                      <li class="breadcrumb-item active" aria-current="page">KAKOTO REFLEXOLOGY & MASSAGE</li>
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
      <div class="col-sm-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <img src="<?php echo base_url('assets/img/kako-desk.png') ?>" class="img-responsive">
      </div>
      <?php
          foreach ($about as $about): ?>
      <div class="col-sm-7" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="logo">
          <img src="<?php echo base_url('upload/homepage/'.$about->image) ?>" class="img-responsive">     
        </div>
        <p><?php echo $about->description ?></p>
      </div>
      <div class="col-sm-12">
        <p><?php echo $about->description2 ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="product">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <h2>PRODUK & LAYANAN</h2>
        <h1>REFLEXOLOGY & MASSAGE</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <div id="blogCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#blogCarousel" data-slide-to="1"></li>
            <li data-target="#blogCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel Inner -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/kakoo1.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>REFLEXY</h3>
                        <p>Pijit reflexy merupakan metode pijit atau urut yang berfokus pada titik di bagian kaki,tangan dqn telinga.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/kakoo2.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>FULL BODY MASSAGE</h3>
                        <p>Full body masage ini dapat meredakan rasa nyeri punggun,meningkatkan kualitas tidur hingga melawan rasa letih.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/kakoo3.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>THAI MASSAGE</h3>
                        <p>Thai massage menggunakan teknik peregangan,penarikandan gerakan seperti yoga.manfaatnya untuk meredakan sakit kepala,mengurangi sakit punggung,meredakan nyeri sendi dan otot dll.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/kakoo1.png') ?>">
                      </a>
                      <div class="card-title">
                        <h3>TOTOK WAJAH</h3>
                        <p>merupakan metode pengobatan dengan memberikan tekanan di titik titik tertentu pada wajah dan memberikan manfaat bagi kesehatan dan kecentikan.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/lulur.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>LULUR</h3>
                        <p>Bermanfaat untuk mengangkat sel kulit mati yang akan terlihat kusam dan membuat kulit lebih cerah.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/hotstone.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>HOT STONE</h3>
                        <p>Merupakan terapi pijit menggunakan batu panas yang bertujuan meredakan otot tegang lebih rileksdan memperbaiki jaringan yang rusak di tubuh.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/bekam.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>BEKAM</h3>
                        <p>adalah suatu metode  pemgobatan yang dilakukan dengan cara menyedot keluar darah kotor manfaatny adalah membuang racun, angin, kolestrol, melancarkan peredaran darah serta mengatasi demam.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="card-body">
                      <a href="#">
                        <img src="<?php echo base_url('assets/img/kerik.jpg') ?>">
                      </a>
                      <div class="card-title">
                        <h3>KOP/KERIK</h3>
                        <p>Selain untuk meredakan masuk angin KOP/KERIK juga bermanfaat untuk meredakan migrain, mengatasi nyeri leher serta membuat tidur lebih nyenyak.</p>
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

<section class="price">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <h1>DAFTAR HARGA</h1>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
          <?php
            foreach ($price as $price): ?>
              <div class="menu" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                  <div class="col-sm-12">
                      <img src="<?php echo base_url('upload/homepage/'.$price->image) ?>" class="img-responsive">
                  </div>
              </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="team">
  <div class="container">
    <div class="row justify-content-center">
      <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <h2>TIM KAMI</h2>
        <hr>
      </div>
    </div>
    <div class="row justify-content-center">
    <?php
          foreach ($tim as $tim): ?>
      <div class="col-sm-4">
        <div class="avatar" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
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
      <div class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <h2>GALERI</h2>
        <h1>Galeri Kegiatan Kami</h1>
        <hr>
      </div>
    </div> 
    <div class="row">
    <?php
        foreach ($gallery as $gallery): ?>
      <div class="col-sm-3">
        <div class="thumbnail" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
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