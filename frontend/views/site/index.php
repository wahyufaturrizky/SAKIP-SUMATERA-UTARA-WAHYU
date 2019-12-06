<?php
use dosamigos\chartjs\ChartJs;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Url;
rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);

/* @var $this yii\web\View */

$this->title = 'Beranda';
?>

<!--*********************************************************************************************************-->
<!--************ HERO ***************************************************************************************-->
<!--*********************************************************************************************************-->
<header id="ts-hero" class="ts-full-screen" data-bg-parallax="scroll" data-bg-parallax-speed="3">

	<!--NAVIGATION ******************************************************************************************-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#1a1360">
		<div class="container">
			<a class="navbar-brand ts-scroll" href="#page-top">
				<img src="images/logo-w.png" alt="">
			</a>
			<!--end navbar-brand-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!--end navbar-toggler-->
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active ts-scroll" href="#page-top">BERANDA<span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link ts-scroll" href="#tentang-sakip">TENTANG</a>
					<a class="nav-item nav-link ts-scroll" href="#informasi-sakip">INFO SAKIP</a>
					<a class="nav-item nav-link ts-scroll" href="#fitur-sakip">e-SAKIP SUMUT</a>
					<a class="nav-item nav-link ts-scroll" href="#sakip-berita">BERITA</a>
					<a class="nav-item nav-link ts-scroll" href="#sakip-peraturan">PERATURAN</a>
					<a class="nav-item nav-link ts-scroll" href="#sakip-lkpj">DOKUMEN LKPJ</a>
					<a class="nav-item nav-link ts-scroll" href="#sakip-kontak">KONTAK</a>
					<a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
						href="<?= url::to('/admin')?>">Login
					</a>
				</div>
				<!--end navbar-nav-->
			</div>
			<!--end collapse-->
		</div>
		<!--end container-->
	</nav>
	<!--end navbar-->

	<!--HERO CONTENT ****************************************************************************************-->
	<div class="container align-self-center">
		<div class="row align-items-center">
			<div class="col-sm-7">
				<h3 class="ts-opacity__50">Selamat Datang!</h3>
				<h1>SAKIP Provinsi Sumatera Utara</h1>
				<a href="#tentang-sakip" class="btn btn-light btn-lg ts-scroll">Penjelasan SAKIP SUMUT</a>
			</div>
			<!--end col-sm-7 col-md-7-->
			<div class="col-sm-5 d-none d-sm-block">
				<div class="owl-carousel text-center" data-owl-nav="1" data-owl-loop="1">
					<img src="images/img07.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
					<img src="images/img07.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
				</div>
			</div>
			<!--end col-sm-5 col-md-5 col-xl-5-->
		</div>
		<!--end row-->
	</div>
	<!--end container-->

	<div class="ts-background" data-bg-image-opacity=".6" data-bg-parallax="scroll" data-bg-parallax-speed="3">
		<div class="ts-svg ts-z-index__2">
			<img src="images/wave-static-02.svg" class="w-100 position-absolute ts-bottom__0">
			<img src="images/wave-static-01.svg" class="w-100 position-absolute ts-bottom__0">
		</div>
		<div class="owl-carousel ts-hero-slider" data-owl-loop="1">
			<div class="ts-background-image ts-parallax-element" data-bg-color="#d24354" data-bg-image="images/img01.jpg"
				data-bg-blend-mode="multiply"></div>
			<div class="ts-background-image ts-parallax-element" data-bg-color="#d24354" data-bg-image="images/img04.jpg"
				data-bg-blend-mode="multiply"></div>
		</div>
	</div>

</header>
<!--end #hero-->

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<main id="ts-content">

	<!--START Tentang Aplikasi SAKIP ****************************************************************************************-->
	<section id="tentang-sakip" class="ts-block">
		<div class="container">
			<div class="ts-title text-center">
				<h2 class="ts-font-color__secondary">Tentang Aplikasi SAKIP</h2>
				<h5>Sistem Akuntabilitas Kinerja Instansi Pemerintah.</h5>
			</div>
			<div class="ts-title">
				<h2 class="ts-font-color__primary">e-Sakip</h2>
			</div>
			<!--end ts-title-->
			<div class="row">
				<div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
					<p>
						Sistem Akuntabilitas Kinerja Instansi Aplikasi Sistem Akuntabilitas Kinerja Instansi
						Pemerintah secara elektronik yang bertujuan untuk memudahkan proses pemantauan dan pengendalian
						kinerja Organisasi Perangkat Daerah di lingkungan Pemerintah Kabupaten Pati dalam rangka
						meningkatkan akuntabilitas dan kinerja Perangkat Daerah pada khususnya dan kinerja Pemerintah
						Kabupaten Pati pada umumnya.
					</p>
				</div>
				<!--end col-xl-5-->
				<div class="col-md-7 col-xl-7 text-center mb-5" data-animate="ts-fadeInUp" data-delay="0.1s" data-offset="100">
					<div class="px-3">
						<img src="images/img02.jpg" class="mw-100 ts-shadow__lg ts-border-radius__md" alt="">
					</div>
				</div>
				<!--end col-xl-7-->
			</div>

			<div class="ts-title mt-5 text-right">
				<h2 class="ts-font-color__primary">Dashboard e-Sakip</h2>
			</div>
			<!--end ts-title-->
			<div class="row">
				<div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s" data-offset="100">
					<div class="px-3">
						<img src="images/img03.jpg" class="mw-100 ts-shadow__lg ts-border-radius__md" alt="">
					</div>
				</div>
				<!--end col-xl-7-->
				<div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
					<p>
						Sebagai sarana pembinaan interaktif pelaksanaan Akuntabilitas kerja instansi pemerintah daerah dan
						sarana penyampaian laporan kinerja Perangkat Daerah secara online..
					</p>
					<a href="<?= url::to('/sakip-dashboard-public')?>" class="btn btn-primary mb-4 ts-scroll">Lihat Detail Dashboard e-SAKIP</a>
				</div>
				<!--end col-xl-5-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--END Tentang Aplikasi SAKIP ************************************************************************************-->

	<!--START INFORMASI SAKIP ****************************************************************************************-->
	<section id="informasi-sakip" class="ts-block text-center">
		<div class="container">
			<div class="ts-title">
				<h2 class="ts-font-color__secondary">INFORMASI SAKIP</h2>
				<h5>Menu Menu Informasi SAKIP yang menampilkan dalam bentuk Visual Grafis.</h5>
			</div>
			<!--end ts-title-->
			<div class="row">
				<div class="col-sm-6 col-md-4 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-perencanaan-strategis.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-01.svg">
								</div>
							</figure>
							<h4 class="--dark">Perencanaan Strategis</h4>
							<p>
								Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
				<div class="col-sm-6 col-md-4 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp" data-delay="0.1s">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-pencapaian-kinerja.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-02.svg">
								</div>
							</figure>
							<h4>Pencapaian Kinerja</h4>
							<p>
								Curabitur tellus enim, aliquet et porttitor id, accumsan at nulla. Praesent vestibulum
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
				<div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp" data-delay="0.2s">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-pengukuran-kinerja.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-03.svg">
								</div>
							</figure>
							<h4>Pengukuran Kinerja</h4>
							<p>
								In non turpis convallis nunc fermentum porttitor sed quis sapien. Etiam et neque
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
			</div>
			<!--end row-->
			<div class="row">
				<div class="col-sm-6 col-md-4 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-grafik-capaian.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-01.svg">
								</div>
							</figure>
							<h4>Grafik Capaian</h4>
							<p>
								Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
				<div class="col-sm-6 col-md-4 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">	
						<figure data-animate="ts-fadeInUp" data-delay="0.1s">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-lcd-chart.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-02.svg">
								</div>
							</figure>
							<h4>Komposisi Capaian</h4>
							<p>
								Curabitur tellus enim, aliquet et porttitor id, accumsan at nulla. Praesent vestibulum
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
				<div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp" data-delay="0.2s">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-pelaporan-kinerja.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-03.svg">
								</div>
							</figure>
							<h4>Pelaporan Kinerja</h4>
							<p>
								In non turpis convallis nunc fermentum porttitor sed quis sapien. Etiam et neque
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
			</div>
			<!--end row-->
			<div class="row">
				<div class="col-sm-6 col-md-4 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-evaluasi-kinerja.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-01.svg">
								</div>
							</figure>
							<h4>Evaluasi Kinerja</h4>
							<p>
								Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
				<div class="col-sm-6 col-md-4 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp" data-delay="0.1s">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-daftar-istilah.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-02.svg">
								</div>
							</figure>
							<h4>Daftar Istilah</h4>
							<p>
								Curabitur tellus enim, aliquet et porttitor id, accumsan at nulla. Praesent vestibulum
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
				<div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp" data-delay="0.2s">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-laporan-kinerja-triwulan.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-03.svg">
								</div>
							</figure>
							<h4>Laporan Kinerja Triwulan</h4>
							<p>
								In non turpis convallis nunc fermentum porttitor sed quis sapien. Etiam et neque
							</p>
						</figure>
					</a>
				</div>
				<!--end col-xl-4-->
			</div>
			<!--end row-->
			<div class="row">
				<div class="col-sm-6 col-md-6 col-xl-6">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-cup-winner.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-01.svg">
								</div>
							</figure>
							<h4>Daftar Penghargaan</h4>
							<p>
								Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
							</p>
						</figure>
						</a>
				</div>
				<!--end col-xl-4-->
				<div class="col-sm-6 col-md-6 col-xl-6">
					<a class="ts-scroll" href="#informasi-sakip">
						<figure data-animate="ts-fadeInUp" data-delay="0.1s">
							<figure class="icon mb-5 p-2">
								<img src="images/icon-cascading.png" alt="">
								<div class="ts-svg" data-animate="ts-zoomInShort" data-bg-image="images/organic-shape-02.svg">
								</div>
							</figure>
							<h4>Cascading</h4>
							<p>
								Curabitur tellus enim, aliquet et porttitor id, accumsan at nulla. Praesent vestibulum
							</p>
						</figure>
					</a>
				</div>
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--END INFORMASI SAKIP ************************************************************************************-->

	<!--START FEATURE SAKIP ****************************************************************************************-->
	<section id="fitur-sakip" class="ts-block mt-5">
		<div class="container">
			<div class="ts-title text-center">
				<h2 class="ts-font-color__secondary">e-SAKIP SUMUT Mobile</h2>
			</div>
			<!--end ts-title-->
			<div class="row align-items-center">
				<div class="col-md-4">
					<figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp">
						<figure class="icon">
							<img src="images/icon-pengukuran-kinerja.png" class="" alt="">
						</figure>
						<h4 class="mb-2">Pengukuran Kinerja</h4>
						<p>
							Pengukuran Kinerja Pemerintah Provinsi dan OPD.
						</p>
					</figure>
					<figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
						<figure class="icon">
							<img src="images/icon-grafik-capaian.png" class="" alt="">
						</figure>
						<h4 class="mb-2">penganggaran yang Berbasis pada Kinerja</h4>
						<p>
							memudahkan untuk menentukan program yang bersifat prioritas dan pendukung.
						</p>
					</figure>
					<figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
						<figure class="icon">
							<img src="images/icon-evaluasi-kinerja.png" class="" alt="">
						</figure>
						<h4 class="mb-2">Mengubah Paradigma Kerja Menjadi Kinerja</h4>
						<p>
							sebagai dasar pemberian rewards and punishment, erta menjadi dasar penentuan bagi pemerintah provinsi untuk melakukan mutasi dan rotasi.
						</p>
					</figure>
				</div>
				<!--end col-md-4-->

				<div class="col-md-4 my-5 d-flex justify-content-center align-items-center">
					<div class="image position-relative">
						<img src="images/img07.png" class="mw-100" alt="" data-animate="ts-zoomInShort" data-delay=".1s">
						<aside class="ts-svg ts-svg__organic-shape-01 ts-background-size-contain" data-animate="ts-zoomInShort"
							data-delay=".4s"></aside>
					</div>
				</div>
				<!--end col-md-4-->

				<div class="col-md-4">
					<figure class="ts-xs-text-center" data-animate="ts-fadeInUp">
						<figure class="icon">
							<img src="images/icon-daftar-istilah.png" class="" alt="">
						</figure>
						<h4 class="mb-2">Capaian Indikator Kinerja Utama (IKU)</h4>
						<p>
							pertumbuhan PDRB/LPE,  Indeks Gini, Indeks Pemerataan Pendapatan Versi Bank Dunia.
						</p>
					</figure>
					<figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
						<figure class="icon">
							<img src="images/icon-perencanaan-strategis.png" class="" alt="">
						</figure>
						<h4 class="mb-2">Partisipasi Masyarakat (Participant Based Development)</h4>
						<p>
							Dengan demikian, proses pembangunan akan lebih mengedepankan apa yang dibutuhkan oleh masyarakat.
						</p>
					</figure>
					<figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
						<figure class="icon">
							<img src="images/icon-cascading.png" class="" alt="">
						</figure>
						<h4 class="mb-2">Integrasikan Perencanaan dengan Budget dalam KUA/PPAS</h4>
						<p>
							Pengintegrasian antara e-planning, e-budgeting, serta konsistensi pelaksaannya.
						</p>
					</figure>
				</div>
				<!--end col-md-4-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--END FEATURE SAKIP ****************************************************************************************-->

	<!--BERITA ********************************************************************************************-->
	<section id="sakip-berita" class="ts-block" id="gallery" class="ts-block ts-shape-mask__up" data-bg-color="#f7f7f7"
		data-bg-image="" data-bg-size="contain" data-bg-repeat="no-repeat">
		<div class="container">
			<div class="ts-title text-center">
				<h2 class="ts-font-color__secondary">BERITA</h2>
			</div>
			<!--end ts-title-->
			<div class="row">
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="ts-card__image ts-img-into-bg">
							<img class="card-img-top" src="images/img05.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="mb-1">Sumatara Utara Raih Penghargaan SAKIP Award 2018 dari Kemenpan RB</h5>
							<h6 class="ts-opacity__50 ts-text-small">Kabupaten Sumatera Utara hari ini mendapatkan penghargaan
								dari Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PAN-RB), untuk laporan Hasil
								Evaluasi Akuntabilitas Kinerja Instansi Pemerintah (LHE AKIP) tahun 2018 di...</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a href="#">
									<i class="fas fa-calendar-day"> 30 - 07 - 2019</i>
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="ts-card__image ts-img-into-bg">
							<img class="card-img-top" src="images/img05.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="mb-1">Sumatara Utara Raih Penghargaan SAKIP Award 2018 dari Kemenpan RB</h5>
							<h6 class="ts-opacity__50 ts-text-small">Kabupaten Sumatera Utara hari ini mendapatkan penghargaan
								dari Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PAN-RB), untuk laporan Hasil
								Evaluasi Akuntabilitas Kinerja Instansi Pemerintah (LHE AKIP) tahun 2018 di...</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a href="#">
									<i class="fas fa-calendar-day"> 30 - 07 - 2019</i>
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="ts-card__image ts-img-into-bg">
							<img class="card-img-top" src="images/img05.jpg" alt="Card image cap">
						</div>
						<div class="card-body">
							<h5 class="mb-1">Sumatara Utara Raih Penghargaan SAKIP Award 2018 dari Kemenpan RB</h5>
							<h6 class="ts-opacity__50 ts-text-small">Kabupaten Sumatera Utara hari ini mendapatkan penghargaan
								dari Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PAN-RB), untuk laporan Hasil
								Evaluasi Akuntabilitas Kinerja Instansi Pemerintah (LHE AKIP) tahun 2018 di...</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a href="#">
									<i class="fas fa-calendar-day"> 30 - 07 - 2019</i>
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--END BERITA ****************************************************************************************-->

	<!--PERATURAN ********************************************************************************************-->
	<section id="sakip-peraturan" class="ts-block" id="gallery" class="ts-block ts-shape-mask__up" data-bg-color="#f7f7f7"
		data-bg-image="" data-bg-size="contain" data-bg-repeat="no-repeat">
		<div class="container">
			<div class="ts-title text-center">
				<h2 class="ts-font-color__secondary">PERATURAN</h2>
			</div>
			<!--end ts-title-->
			<div class="row">
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="card-body text-center">
							<h5 class="mb-1">PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 29 TAHUN 2014</h5>
							<h6 class="ts-opacity__50 ts-text-small">TENTANG SISTEM AKUNTABILITAS KINERJA INSTANSI PEMERINTAH</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
									href="#download">
									Download
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="card-body text-center">
							<h5 class="mb-1">PERATURAN MENTERI PENDAYAGUNAAN APARATUR NEGARA DAN REFORMASI BIROKRASI REPUBLIK
								INDONESIA NOMOR 53 TAHUN 2014</h5>
							<h6 class="ts-opacity__50 ts-text-small">TENTANG PETUNJUK TEKNIS PERJANJIAN KINERJA, PELAPORAN KINERJA
								DAN TATA CARA REVIU ATAS LAPORAN KINERJA INSTANSI PEMERINTAH</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
									href="#download">
									Download
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="card-body text-center">
							<h5 class="mb-1">PERATURAN MENTERI PENDAYAGUNAAN APARATUR NEGARA DAN REFORMASI BIROKRASI REPUBLIK
								INDONESIA NOMOR 12 TAHUN 2015</h5>
							<h6 class="ts-opacity__50 ts-text-small">TENTANG PEDOMAN EVALUASI ATAS IMPLEMENTASI SISTEM
								AKUNTABILITAS KINERJA INSTANSI PEMERINTAH</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
									href="#download">
									Download
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--END PERATURAN ****************************************************************************************-->

	<!--DOKUMEN LKJP ********************************************************************************************-->
	<section id="sakip-lkpj" class="ts-block" id="gallery" class="ts-block ts-shape-mask__up" data-bg-color="#f7f7f7"
		data-bg-image="" data-bg-size="contain" data-bg-repeat="no-repeat">
		<div class="container">
			<div class="ts-title text-center">
				<h2 class="ts-font-color__secondary">DOKUMEN LKPJ</h2>
			</div>
			<!--end ts-title-->
			<div class="row">
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="card-body text-center">
							<h5 class="mb-1">Tahun 2016</h5>
							<h6 class="ts-opacity__50 ts-text-small">Provinsi Sumatera Utara</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
									href="#download">
									Download
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="card-body text-center">
							<h5 class="mb-1">Tahun 2017</h5>
							<h6 class="ts-opacity__50 ts-text-small">Provinsi Sumatera Utara</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
									href="#download">
									Download
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
				<div class="col-sm-4 col-lg-4">
					<div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
						<div class="card-body text-center">
							<h5 class="mb-1">Tahun 2018</h5>
							<h6 class="ts-opacity__50 ts-text-small">Provinsi Sumatera Utara</h6>
						</div>
						<div class="card-footer bg-white">
							<div class="ts-social-icons">
								<a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto"
									href="#download">
									Download
								</a>
							</div>
							<!--end social-icons-->
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-md-3-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</section>
	<!--END DOKUMEN LKJP ****************************************************************************************-->

	<!--GALERI ********************************************************************************************-->
	<section id="gallery" class="ts-block" data-bg-color="#f7f7f7" data-bg-image=""
		data-bg-size="contain" data-bg-repeat="no-repeat">
		<div class="ts-title text-center">
			<h2 class="ts-font-color__secondary">FOTO</h2>
		</div>
		<!--end ts-title-->
		<div class="owl-carousel ts-carousel-centered py-2 mb-5" data-owl-loop="1" data-owl-nav="1" data-owl-items="1"
			data-owl-margin="30" data-owl-center="1">
			<div class="slide">
				<img src="images/img-06.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
			<div class="slide">
				<img src="images/img-06.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
			<div class="slide">
				<img src="images/img-06.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
			<div class="slide">
				<img src="images/img-06.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
		</div>
	</section>
	<!--end #gallery.ts-block-->

	<!--GALERI ********************************************************************************************-->
	<section id="gallery" class="ts-block" data-bg-color="#f7f7f7" data-bg-image=""
		data-bg-size="contain" data-bg-repeat="no-repeat">
		<div class="ts-title text-center">
			<h2 class="ts-font-color__secondary">VIDEO</h2>
		</div>
		<!--end ts-title-->
		<div class="owl-carousel ts-carousel-centered py-2 mb-5" data-owl-loop="1" data-owl-nav="1" data-owl-items="1"
			data-owl-margin="30" data-owl-center="1">
			<div class="slide">
				<img src="images/img-07.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
			<div class="slide">
				<img src="images/img-07.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
			<div class="slide">
				<img src="images/img-07.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
			<div class="slide">
				<img src="images/img-07.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
			</div>
		</div>
	</section>
	<!--end #gallery.ts-block-->

</main>
<!--end #content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<footer id="ts-footer">

	<section id="sakip-kontak" class="ts-separate-bg-element" data-bg-image="images/bg-desk.png"
		data-bg-image-opacity=".1" data-bg-color="#1b1464">
		<div class="container">
			<div class="ts-box mb-0 p-5 ts-mt__n-10">
				<div class="row">
					<div class="col-md-4">
						<h3>Hubungi Kami</h3>
						<address>
							<figure>
								Kantor kami beralamat di Jl Karya wisata Perumahan citra wisata blok VI no 42 Medan, Indonesia
							</figure>
							<br>
							<figure>
								<div class="font-weight-bold">Email:</div>
								<a href="#">info@codinglab.id</a>
							</figure>
							<figure>
								<div class="font-weight-bold">Telp:</div>
								+62 81265 600800
							</figure>
							<div class="font-weight-bold">WhatsApp:</div>
							+62 81265 600800
						</address>
						<!--end address-->
					</div>
					<!--end col-md-4-->
					<div class="col-md-8">
						<h3>Formulir Kontak</h3>
						<form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent"
							data-php-path="assets/php/email.php">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="form-contact-name">Nama Anda *</label>
										<input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Nama Anda"
											required>
									</div>
									<!--end form-group -->
								</div>
								<!--end col-md-6 col-sm-6 -->
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="form-contact-email">Email Anda *</label>
										<input type="email" class="form-control" id="form-contact-email" name="email"
											placeholder="Email Anda" required>
									</div>
									<!--end form-group -->
								</div>
								<!--end col-md-6 col-sm-6 -->
							</div>
							<!--end row -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="form-contact-message">Pesan Anda *</label>
										<textarea class="form-control" id="form-contact-message" rows="5" name="message"
											placeholder="Pesan Anda" required></textarea>
									</div>
									<!--end form-group -->
								</div>
								<!--end col-md-12 -->
							</div>
							<!--end row -->
							<div class="form-group clearfix">
								<button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Kirim Pesan
									Anda</button>
							</div>
							<!--end form-group -->
							<div class="form-contact-status"></div>
						</form>
						<!--end form-contact -->
					</div>
				</div>
				<!--end row-->
			</div>
			<!--end ts-box-->

			<div class="text-center text-white py-4">
				<small>© 2019, All Rights Reserved</small>
			</div>
		</div>
		<!--end container-->
	</section>

</footer>
<!--end #footer-->
