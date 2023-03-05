<?php 

    $page = 'contact';

?>

<?php 

    include 'layouts/header.php'

?>


 <!-- banner -->
 <div class="banner1 mb-1" style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
		<div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Kontak</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Kontak
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    <!-- end banner -->
    <!-- kontak person -->
    <div class="container" style="margin-top: 3rem;">
        <?php
				
			foreach ($koneksi->get_kontak() as $contact) {
					
		?>
        <div class="col-md-4 col-12 mb-2">
            <img src="assets/images/4.jpg" class="rounded-3 shadow-sm img-fluid w-100" style="object-fit: cover;filter:brightness(70%)">
        </div>
        <div class="col-md-8 col-12">
            <h2 class="mb-1"><?= $contact['judul_kontak']?></h3>
            <div class="mb-1">
                <h4>KANTOR PUSAT</h4>
                <p><?= $contact['alamat_kontak1'] ?></p>
            </div>
            <div class="mb-1">
                <h4>KANTOR BIDANG PERDAGANGAN BARANG DAN JASA</h4>
                <p><?= $contact['alamat_kontak2'] ?></p>
            </div>
            <div class="mb-1">
                <h4>KANTOR BIDANG AGRIBISNIS DAN ARIWISATA</h4>
                <p><?= $contact['alamat_kontak3'] ?></p>
            </div>
        </div>

       
    </div>
    <!-- end koper -->
    <!-- maps -->
    <div class="container mb-3">
        <div class="row" style="align-items: center;">
            <div class="col-md-6 mb-0">
                <div class="embed-responsive embed-responsive-4by3" style="display: block;">
                    <iframe class="embed-responsive-item" src="<?= $contact['url_maps'] ?>"></iframe>
                </div>
            </div>
            <?php
            }
            ?>
            <div class="col-md-6 contact-grid-right animated wow slideInRight" data-wow-delay=".5s" style="padding-top: 0px; margin-top:0px;">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fw-bold">Send Us Message</h3>
                        <div class="" style="padding-top: 10px;">
                            <div class="">
                                <form action="" class="form-group">
                                    <div class="row mb-1">
                                        <div class="col-md-6">
                                            <input type="text" name="" placeholder="First Name" class="form-control" style="width: 100%; background: none; padding: 22px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="" placeholder="First Name" class="form-control" style="width: 100%; background: none; padding: 22px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="" placeholder="Last Name" class="form-control" style="width: 100%; background: none; padding: 22px;">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Message" name="" id="" style="background: none;"></textarea>
                                        <!-- <textarea class="form-control" placeholder="Message" name="" id="" cols="30" rows="10" style="width: 100%; background: none; padding: 0px;"></textarea> -->
                                    </div>
                                </form>
                                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                
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