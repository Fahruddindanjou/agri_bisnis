<?php 

    $page = 'produk';

?>

<?php 

    include 'layouts/header.php'

?>


    <!-- banner -->
	<div class="banner1 mb-1" style="background-image:url('https://images.unsplash.com/photo-1463123081488-789f998ac9c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'); max-width: 100%; ">
		<div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Produk</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Produk
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    <!-- end banner -->
    <!-- kontak person -->
    <div class="container" style="margin-top: 3rem;">
        <div class="col-md-4 col-12 mb-2">
            <img src="assets/images/4.jpg" class="rounded-3 shadow-sm img-fluid w-100" style="object-fit: cover;filter:brightness(70%)">
        </div>
        <div class="col-md-8 col-12 mb-1">
            <h3>What Lorem Ipsum?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias id sunt consequuntur repudiandae voluptatum consequatur.</p>
        </div>
    </div>
    <!-- end koper -->
    <!-- maps -->
    <div class="container mb-3">
        <div class="row">
            <h3 class="mb-1 text-center">Produk Agri Bisnis</h3>
            <div class="col-md-8">
                <div class="card mb-1 shadow-sm">
                    <div class="card-body">
                        <div style="display: flex;">
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" class="active" style="margin:0px;"><a href="#ternak" class="text-green" role="tab" data-toggle="tab"><i class="fa fa-cow"></i> Ternak</a></li>
                                <li role="presentation"><a href="#sayuran" class="text-green" role="tab" data-toggle="tab"><i class="fa fa-leaf"></i> Sayuran</a></li>
                                <li role="presentation"><a href="#buah" class="text-green" role="tab" data-toggle="tab"><i class="fa fa-lemon-o"></i> Buah</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-1  shadow-sm" style="padding-bottom: 3px;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; justify-items: center;">
                            <h4 class="fs-normal" style="margin-top: 7px;">Produk</h4>
                            <div class="input-group" style="margin-bottom: 5px;">
                                <div class="input-group-btn">
                                  <button class="form-control dropdown-toggle" placeholder="" style="border-radius: 5px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></button>
                                  <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div><!-- /btn-group -->
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="ternak">
                    <?php 
                        
                        foreach($koneksi->get_produk() as $produks){

                    ?>
                    <?php if($produks['id'] == "2"){?>
                        <a href="detail_produk.php" class="text-dark">
                        <div class="col-md-4 mb-1">
                                <div class="card shadow-sm" style="border-radius: 5px;">
                                    <div style=" justify-items: center;">
                                        <img src="assets/images/<?= $produks['gambar_produk'] ?>" class="card-img-top " style="max-height: 50%;">
                                    </div>
                                    <div class="card-body text-left">
                                        <p class="fw-bold text-dark" style="margin-bottom: 3px;"><?= $produks['nm_menu'] ?></p>
                                        <p class="fw-bold text-dark" style="margin-bottom: 3px;"><?= $produks['harga_produk'] ?>  / Ekor</p>
                                        <p class=" text-dark"><i class="fa fa-location-dot"></i> <?= $produks['lokasi'] ?></p>
                                        <p style="color: #2525259c;"><i class="fa fa-star" style="font-size: smaller; color: gold;"></i> <?= $produks['rating_produk'] ?> | <?= $produks['terjual'] ?>rb </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php
    
                            }
    
                        ?>
    
                        <?php } ?>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="sayuran">
                        <?php 
                            
                            foreach($koneksi->get_produk() as $produks){
    
                        ?>
                        <?php if($produks['id'] == "1"){?>
                        <div class="col-md-4 mb-1">
                            <a href="detail_produk.php" class="text-dark">
                                <div class="card shadow-sm" style="border-radius: 5px;">
                                    <div style=" justify-items: center;">
                                        <img src="assets/images/<?= $produks['gambar_produk'] ?>" alt="" class="card-img-top " style="max-height: 50%;">
                                    </div>
                                    <div class="card-body text-left">
                                        <p class="fw-bold text-dark" style="margin-bottom: 3px;"><?= $produks['nm_menu'] ?></p>
                                        <p class="fw-bold text-dark" style="margin-bottom: 3px;"> <?= $produks['harga_produk'] ?> / kg</p>
                                        <p class=" text-dark"><i class="fa fa-location-dot"></i> <?= $produks['lokasi'] ?></p>
                                        <p style="color: #2525259c;"><i class="fa fa-star" style="font-size: smaller; color: gold;"></i> <?= $produks['rating_produk'] ?> | <?= $produks['terjual'] ?>rb </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php

                        }

                        ?>

                        <?php } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="buah">
                        <?php 
                            
                            foreach($koneksi->get_produk() as $produks){
    
                        ?>
                        <?php if($produks['id'] == "3"){?>
                        <div class="col-md-4 mb-1">
                            <a href="detail_produk.php" class="text-dark">
                                <div class="card shadow-sm" style="border-radius: 5px;">
                                    <div style=" justify-items: center;">
                                        <img src="assets/images/<?= $produks['gambar_produk'] ?>" alt="" class="card-img-top " style="max-height: 50%;">
                                    </div>
                                    <div class="card-body text-left">
                                        <p class="fw-bold text-dark" style="margin-bottom: 3px;"><?= $produks['nm_menu'] ?></p>
                                        <p class="fw-bold text-dark" style="margin-bottom: 3px;"><?= $produks['harga_produk'] ?> / kg</p>
                                        <p class=" text-dark"><i class="fa fa-location-dot"></i> <?= $produks['lokasi'] ?></p>
                                        <p style="color: #2525259c;"><i class="fa fa-star" style="font-size: smaller; color: gold;"></i> <?= $produks['rating_produk'] ?> | <?= $produks['terjual'] ?>rb+ </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php

                        }

                        ?>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm " style="padding:5px 5px 5px 5px;">
                    <h4>Best Seller</h4>
                    <div class="media" style="border-bottom: 1px solid #dbdbdb;">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object shadow-sm" src="assets/images/apel.jpg" alt="..." style="max-width:100px; max-height: 100px;">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Apple</h4>
                          <p>Seller : Pertanian Makmur</p>
                          <div style="display:flex;">
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star-half" style="color: gold;"></i>  
                            </div>
                        </div>
                    </div>
                    <div class="media" style="border-bottom: 1px solid #dbdbdb;">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object shadow-sm" src="assets/images/pepaya.png" style="max-width:100px; max-height: 100px;">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">Pepaya</h4>
                          <p>Seller : Pertanian Makmur</p>
                          <div style="display:flex;">
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star" style="color: gold;"></i>
                            <i class="fa fa-star-half" style="color: gold;"></i>  
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php 

    include 'layouts/footer.php'

?>