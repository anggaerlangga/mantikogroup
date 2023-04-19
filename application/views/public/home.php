<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <img src="<?php echo base_url('assets/img/mantikogroup.png') ?>" class="img-responsive" />
            </div>
            <div class="col-sm-7">
                <div class="title">
                    <h1 style="color:#0984e3;"><?php echo $about->title ?></h1>
                    <h1><?php echo $about->subtitle ?></h1>
                    <hr>
                </div>
                <p><?php echo $about->description ?></p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="row" style="float:right;">
            <div class="whatsapp">
                <a href="https://wa.me/6281281268286?text=Hi+!+Apakah+barang+yang+dijual+di+Website+Galactica+tersedia+?">
                    <img src="<?php echo base_url('assets/img/Asset 26.png') ?>" class="img-responsive" />
                </a>
            </div>
        </div>
    </div>
</section>

<section class="sectwo" id="product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title">
                <h2>PRODUK</h2>
                <h1>Produk & Layanan kami</h1>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
        <?php
            // foreach ($product->result() as $row) {
            foreach ($product as $product): ?>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo base_url('upload/homepage/'.$product->image) ?>" alt="" class="img-responsive">
                        <div class="card-title">
                            <h3><?php echo $product->title ?></h3>
                            <p><?php echo $product->description ?></p>
                        </div>
                        <div class="btn-group">
                            <a href="<?php echo $product->URL ?>" class="btn btn-primary" role="button">Lebih Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 

<section class="secthree" id="secthree">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title">
                <h2>KLIEN</h2>
                <h1>Klien - klien kami</h1>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
                foreach ($client as $client): ?>
                <div class="col-sm-2">
                    <div class="card">
                        <img class="img-responsive" src="<?php echo base_url('upload/homepage/'.$client->image) ?>">   
                    </div>             
                </div>
                <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="secfive" id="secfive">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title">
                <h2>Galeri</h2>
                <h1>Galeri dan Portofolio kami</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <select class="form-control" id="galery_product">
                    <option value="1" selected>Mantiko Travel</option>
                    <option value="2">Vidtron Multimedia</option>
                    <option value="3">MGI Academy</option>
                    <option value="4">UF Enterprise</option>
                    <option value="5">Kakoto</option>
                    <option value="6">D'Kapau</option>
                </select>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($gallery_mantiko as $gallery_mantiko): ?>
            <div class="col-sm-3" id="mantiko">
                <div class="thumbnail">
                    <div class="thumbnail-img">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url('upload/image/'.$gallery_mantiko->photo) ?>">
                        </a>
                        <div class="thumbnail-body">
                            <h4 class="title"><a href="#"><?php echo $gallery_mantiko->title ?></a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php
                foreach ($gallery_vidtron as $gallery_vidtron): ?>
            <div class="col-sm-3"  id="vidtron">
                <div class="thumbnail">
                    <div class="thumbnail-img">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo base_url('upload/image/'.$gallery_vidtron->photo) ?>">
                        </a>
                        <div class="thumbnail-body">
                            <h4 class="title"><a href="#">Lorem ipsum</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="secsix" id="secsix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title">
                <h1>CONTACT</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')">Mantiko Travel & Mice</button>
                    <button class="tablinks" onclick="openCity(event, 'kakoto')">Kakoto</button>
                    <button class="tablinks" onclick="openCity(event, 'vidtron')">Vidtron</button>
                    <button class="tablinks" onclick="openCity(event, 'mgi')">MGI Academy</button>
                    <button class="tablinks" onclick="openCity(event, 'dkapau')">D'Kapau</button>
                    <button class="tablinks" onclick="openCity(event, 'uf')">UF Enterprise</button>
                </div>
            </div>
        </div>
        <div id="mantiko" class="tabcontent">
            <div class="row">
                <div class="col-sm-6">
                    <div class="maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.221011281177!2d106.667814!3d-6.190216!3m2" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact">
                        <ul>
                            <li><img src="<?php echo base_url('assets/img/telephone.png')?>"></li>
                            <li><img src="<?php echo base_url('assets/img/whatsapp.png')?>"></li>
                            <li><img src="<?php echo base_url('assets/img/instagram.png')?>"></li>
                            <li><img src="<?php echo base_url('assets/img/place.png')?>">Jl. Ir. H. Juanda 2, gg.kingkit 2/2 RT 012 / 004, Kel. kebon kelapa kec. Gambir - Jakarta Pusat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    $(document).ready(function(){
        $('#vidtron').hide();
        $('#galery_product').change(function(){
            if($('#galery_product').val() == 1) {
                $('#mantiko').fadeIn();
                $('#vidtron').hide();
            } else if($('#galery_product').val() == 2) {
                $('#vidtron').fadeIn();
                $('#mantiko').hide();
            }
        });
    });
</script>