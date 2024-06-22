        <!-- Header-->
        <header class="bg-dark">
	
			<!-- ... kode lainnya ... -->
			<!-- Tambahkan CSS Owl Carousel -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
			
			<!-- Tambahkan jQuery -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			
			<!-- Tambahkan Owl Carousel JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
			<!-- ... kode lainnya ... -->
		

            <img class="gambar_bg" src="<?php echo base_url('assets/assets_shop/assets/homepage2.jpg'); ?>" alt="Gambar">
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <br>
                    <h1 class="display-4 fw-bolder">Selamat datang di Kris Rental Motor Semarang!</h1><br>
                    <p class="lead fw-normal text-white-50 mb-0">Kami dengan gembira menyambut Anda di halaman landing page resmi Kris Rental Motor Semarang. Kami bangga menjadi mitra perjalanan Anda dalam menjelajahi Semarang dan sekitarnya dengan nyaman dan praktis. </p>
                    <br>
                    <p class="lead fw-normal text-white-50 mb-0">Kris Rental Motor Semarang tidak hanya menawarkan kendaraan berkualitas, tetapi juga menyediakan tim yang ramah dan berpengalaman yang siap membantu Anda dengan pertanyaan atau permintaan khusus.</p>
                    <br>
                    <p class="lead fw-normal text-white-50 mb-0">Terima kasih telah memilih Kris Rental Motor Semarang sebagai mitra perjalanan Anda. Kami berkomitmen untuk memberikan layanan terbaik dan pengalaman menyenangkan selama Anda bersama kami. Nikmati perjalanan Anda dengan nyaman dan bebas, dan jangan ragu untuk menghubungi kami jika ada yang bisa kami bantu.</p>
                    <br>
                    <p class="lead fw-normal text-white-50 mb-0">Selamat menjelajahi Semarang!</p><br><br><br>
                </div>
            </div>
            
        </header>
        <section class="py-5">
            <h3 class="display-6 fw-bolder text-center">-- Keunggulan Kris Rental Motor Semarang --</h3><br>
            <div class="container-fluid">
                <div class="row justify-content-center " style="margin-left: 12%;">
                    <div class="col-lg-4 d-flex fasi">
                        <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-8">
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div style="margin-top:30px;">
                                        <h4>Harga yang Kompetitif</h4>
                                        <p class="description lead fw-normal text-white-50 mb-0"></p>
                                        <p>Kami menawarkan harga sewa motor yang kompetitif dan terjangkau. Dengan harga yang bersaing, pelanggan dapat menikmati layanan rental motor dengan budget yang terjangkau.</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex fasi">
                        <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="row">

                                <div class="col-lg-8 col-md-8 ">
                                    <div style="margin-top:30px;">
                                        <h4>Kondisi Motor yang Baik</h4>
                                        <p class="description"></p>
                                        <p>Kami menjaga kondisi motor-motornya agar selalu dalam keadaan baik. Motor-motor tersebut rutin dipelihara dan diperiksa secara berkala untuk memastikan kinerja yang optimal dan keamanan pengguna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex fasi">
                        <div style="margin-top:30px; margin-right:20%">
                            <h4>Sistem Pemesanan yang Mudah</h4>
                            <p class="description"></p>
                            <p>Kami menyediakan sistem pemesanan yang mudah dan praktis. Pelanggan dapat memesan motor secara online melalui situs web atau menghubungi nomor telepon yang telah disediakan.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Section-->
        <section class="py-5">
            <h2 class="display-6 fw-bolder text-center">-- Motor yang kami sewakan --</h2><br>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
				<?php foreach ($motor as $mb) : ?>
					<div class="col mb-5">
						<div class="card h-100 shadow">
							<!-- Product image-->
							<img class="card-img-top" src="<?php echo base_url('assets/img/motor/' . $mb->gambar) ?>" alt="Gambar Motor" height="250px" />
							<!-- Product details-->
							<div class="card-body p-4 bg-">
								<div class="text-left">
									<!-- Product name-->
									<h5 class="fw-bolder"><?php echo $mb->merek ?></h5>
									<!-- Product price-->
									Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?> / Hari
								</div>
							</div>
							<!-- Product actions-->
							<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
								<?php
								if ($mb->status == "0") {
									echo '<div class="text-center"><span class="btn btn-danger" disabled>Tidak Tersedia</span></div>';
								} elseif ($mb->status == "3") {
									echo'<p style="font-size: 12px;" class="text-center"><p/>';
									echo '<div class="text-center"><a href="' . base_url('sewa/') . $mb->id_motor . '" class="btn btn-danger">Sedang disewa</a></div>';
								} else {
								?>
									<div class="text-center"><a href="<?= base_url('sewa/') . $mb->id_motor ?>" class="btn btn-success">Sewa Sekarang</a></div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
                </div>
            </div>
			<div class="py-5">
			<h2 class="display-6 fw-bolder text-center">-- Galeri Testimoni --</h2><br>
			<div class="owl-carousel owl-theme">
				<?php
				foreach ($galeri as $row) {
				?>
					<div class="item">
						<img src="<?= base_url('assets/img/galeri/') . $row->gambar ?>" alt="Gambar 1">
					</div>
				<?php
				}
				?>
			</div>
		</div>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 5,
					nav: true,
					autoplay: true,
					
					autoplayTimeout: 4000,
					responsive: {
						0: {
							items: 3 // Menampilkan 3 item pada semua resolusi
						}
					}
				});
			});
		</script>


        </section>
        <?php
        if ($diskon['status_diskon'] == 1) {
        ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="<?= base_url('assets/img/diskon/') . $diskon['gambar_diskon'] ?>" width="100%" alt=""><br>
                            <strong><?= $diskon['deskripsi_diskon'] ?></strong>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                        keyboard: false
                    });
                    myModal.show();
                });
            </script>
        <?php
        }
        ?>

        <style>
			.item{
				perspective: 100px;
			}
            .shadow {

                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .navbar-oren {
                background-color: #000;
            }

            .gambar_bg {
                overflow: hidden;
                width: 100%;
                height: auto;
                display: block;

            }
        </style>
