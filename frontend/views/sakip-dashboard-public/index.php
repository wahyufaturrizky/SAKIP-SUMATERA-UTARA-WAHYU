<?php
use dosamigos\chartjs\ChartJs;
use rmrevin\yii\fontawesome\FAS;
use yii\helpers\Url;
rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);

/* @var $this yii\web\View */

$this->title = 'Dashboard SAKIP PUBLIK';
?>

<!--NAVIGATION ******************************************************************************************-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" data-bg-color="#1a1360">
	<div class="container">
		<a class="navbar-brand ts-scroll" href="<?= url::to('http://sakip.test')?>">
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
				<a class="nav-item nav-link active ts-scroll" href="<?= url::to('http://sakip.test')?>">BERANDA<span
						class="sr-only">(current)</span></a>
			</div>
			<!--end navbar-nav-->
		</div>
		<!--end collapse-->
	</div>
	<!--end container-->
</nav>
<!--end navbar-->


<div class="container">

	<!-- Page Heading -->
	<div style="margin-top: 80px;" class="d-sm-flex align-items-center justify-content-between mb-2">
		<h1 class="h2 mb-0 text-gray-800 font-weight-bold">Selamat Datang di SAKIP SUMATERA UTARA</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-download fa-sm text-dark-50"></i> Generate Report</a>
	</div>
	<h1 class="h1 text-gray-800 font-weight-bold">Dashboard Akuntablitas Kinerja 2019</h1>
	<p class="mb-4"><?= date('l, d F Y, h:i A'); ?></p>

	<!-- Start PENGELOLAAN KEUANGAN DAERAH -->
	<div class="row mb-4">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card position-relative">
				<div class="card-body">
					<p style="margin-top: 40px;" class="card-title h5 text-gray-800 font-weight-bold">PENGELOLAAN KEUANGAN DAERAH
					</p>
					<div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
						data-ride="carousel">

						<div class="carousel-inner">

							<div class="carousel-item active">

								<div class="row">
									<div class="col-md-12 col-xl-12">
										<div class="row">
											<div class="col-md-8">
												<div class="table-responsive mb-3 mb-md-0">
													<p class="card-title h5 text-primary font-weight-bold">Pendapatan Daerah</p>
													<table class="table table-borderless report-table">
														<tbody>
															<tr>
																<td class="w-50 text-muted">Pendapatan Asli Daerah</td>
																<td class="w-50 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																			role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">40%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">21.350.980.872</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan pajak daerah</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
																			role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">60%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">30.386.082.048</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan retrisbusi daerah</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																			role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">45%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan dari hasil pengelolaan kekayaan daerah yang dipisahkan
																</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
																			role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">80%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Lain-lain PAD yang disahkan</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
																			role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">55%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="mt-4 text-center small">
													<span class="mr-2">
														<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
													</span>
													<span class="mr-2">
														<i class="fas fa-circle text-warning"></i> Akan Tercapai
													</span>
													<span class="mr-2">
														<i class="fas fa-circle text-success"></i> Tercapai
													</span>
												</div>
											</div>
											<div class="col-md-4 mt-0">
												<div class="chart-pie">
													<?= ChartJs::widget([
														'type' => 'pie',
														'data' => [
															'radius' => "100%",
															'labels' => ["Pendapatan Daerah ", "Belanja Daerah ", "Pembiayaan Daerah "],
															'datasets' => [
																[
																	'label' => "My First dataset",
																	'backgroundColor' => ["rgba(36, 138, 253, 0.4)", "rgba(255, 193, 0, 0.4)", "rgba(113, 192, 22, 0.4)"],
																	'borderWidth' => 2,
																	'hoverBackgroundColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'borderColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'data' => [50, 25, 25]
																],
															]
														],
														'clientOptions' => [
															'cutoutPercentage' => 80,
															'legend' => [
																'display' => false,
																'position' => 'bottom',
																'labels' => [
																	'fontSize' => 14,
																	'fontColor' => "#425062",
																]
															],
															'tooltips' => [
																'enabled' => true,
																'intersect' => false,
															],

															'layout' => [
																'padding' => [
																	'left' => 10,
																	'right' => 25,
																	'top' => 25,
																	'bottom' => 0
																]
															],
															'maintainAspectRatio' => false,
														],
													]); ?>
												</div>


												<div id="north-america-legend">
													<div class="report-chart">
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color:#248afd"></div>
																<p class="mb-0">Pendapatan Daerah</p>
															</div>
															<p class="mb-0">30%</p>
														</div>
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color: #ffc100"></div>
																<p class="mb-0">Belanja Daerah</p>
															</div>
															<p class="mb-0">35%</p>
														</div>
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color: #71c016"></div>
																<p class="mb-0">Pembiayaan Daerah</p>
															</div>
															<p class="mb-0">35%</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="carousel-item">

								<div class="row">
									<div class="col-md-12 col-xl-12">
										<div class="row">
											<div class="col-md-8">
												<div class="table-responsive mb-3 mb-md-0">
													<p class="card-title h5 text-warning font-weight-bold">Belanja Daerah</p>
													<table class="table table-borderless report-table">
														<tbody>
															<tr>
																<td class="w-50 text-muted">Pendapatan Asli Daerah</td>
																<td class="w-50 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																			role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">40%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">21.350.980.872</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan pajak daerah</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
																			role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">60%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">30.386.082.048</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan retrisbusi daerah</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																			role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">45%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan dari hasil pengelolaan kekayaan daerah yang dipisahkan
																</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
																			role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">80%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Lain-lain PAD yang disahkan</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
																			role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">55%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="mt-4 text-center small">
													<span class="mr-2">
														<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
													</span>
													<span class="mr-2">
														<i class="fas fa-circle text-warning"></i> Akan Tercapai
													</span>
													<span class="mr-2">
														<i class="fas fa-circle text-success"></i> Tercapai
													</span>
												</div>
											</div>
											<div class="col-md-4 mt-0">
												<div class="chart-pie">
													<?= ChartJs::widget([
														'type' => 'pie',
														'data' => [
															'radius' => "100%",
															'labels' => ["Pendapatan Daerah ", "Belanja Daerah ", "Pembiayaan Daerah "],
															'datasets' => [
																[
																	'label' => "My First dataset",
																	'backgroundColor' => ["rgba(36, 138, 253, 0.4)", "rgba(255, 193, 0, 0.4)", "rgba(113, 192, 22, 0.4)"],
																	'borderWidth' => 2,
																	'hoverBackgroundColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'borderColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'data' => [50, 25, 25]
																],
															]
														],
														'clientOptions' => [
															'cutoutPercentage' => 80,
															'legend' => [
																'display' => false,
																'position' => 'bottom',
																'labels' => [
																	'fontSize' => 14,
																	'fontColor' => "#425062",
																]
															],
															'tooltips' => [
																'enabled' => true,
																'intersect' => false,
															],

															'layout' => [
																'padding' => [
																	'left' => 10,
																	'right' => 25,
																	'top' => 25,
																	'bottom' => 0
																]
															],
															'maintainAspectRatio' => false,
														],
													]); ?>
												</div>


												<div id="north-america-legend">
													<div class="report-chart">
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color:#248afd"></div>
																<p class="mb-0">Pendapatan Daerah</p>
															</div>
															<p class="mb-0">30%</p>
														</div>
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color: #ffc100"></div>
																<p class="mb-0">Belanja Daerah</p>
															</div>
															<p class="mb-0">35%</p>
														</div>
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color: #71c016"></div>
																<p class="mb-0">Pembiayaan Daerah</p>
															</div>
															<p class="mb-0">35%</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="carousel-item">

								<div class="row">
									<div class="col-md-12 col-xl-12">
										<div class="row">
											<div class="col-md-8">
												<div class="table-responsive mb-3 mb-md-0">
													<p class="card-title h5 text-success font-weight-bold">Pembiayaan Daerah</p>
													<table class="table table-borderless report-table">
														<tbody>
															<tr>
																<td class="w-50 text-muted">Pendapatan Asli Daerah</td>
																<td class="w-50 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																			role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">40%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">21.350.980.872</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan pajak daerah</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
																			role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">60%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">30.386.082.048</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan retrisbusi daerah</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																			role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">45%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Penerimaan dari hasil pengelolaan kekayaan daerah yang dipisahkan
																</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
																			role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">80%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
															<tr>
																<td class="text-muted">Lain-lain PAD yang disahkan</td>
																<td class="w-100 px-0">
																	<div class="progress progress-md mx-4">
																		<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
																			role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
																			aria-valuemax="100"></div>
																	</div>
																</td>
																<td>
																	<h5 class="font-weight-bold mb-0">55%</h5>
																</td>
																<td>
																	<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="mt-4 text-center small">
													<span class="mr-2">
														<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
													</span>
													<span class="mr-2">
														<i class="fas fa-circle text-warning"></i> Akan Tercapai
													</span>
													<span class="mr-2">
														<i class="fas fa-circle text-success"></i> Tercapai
													</span>
												</div>
											</div>
											<div class="col-md-4 mt-0">
												<div class="chart-pie">
													<?= ChartJs::widget([
															'type' => 'pie',
															'data' => [
																'radius' => "100%",
																'labels' => ["Pendapatan Daerah ", "Belanja Daerah ", "Pembiayaan Daerah "],
																'datasets' => [
																	[
																		'label' => "My First dataset",
																		'backgroundColor' => ["rgba(36, 138, 253, 0.4)", "rgba(255, 193, 0, 0.4)", "rgba(113, 192, 22, 0.4)"],
																		'borderWidth' => 2,
																		'hoverBackgroundColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																		'borderColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																		'data' => [50, 25, 25]
																	],
																]
															],
															'clientOptions' => [
																'cutoutPercentage' => 80,
																'legend' => [
																	'display' => false,
																	'position' => 'bottom',
																	'labels' => [
																		'fontSize' => 14,
																		'fontColor' => "#425062",
																	]
																],
																'tooltips' => [
																	'enabled' => true,
																	'intersect' => false,
																],

																'layout' => [
																	'padding' => [
																		'left' => 10,
																		'right' => 25,
																		'top' => 25,
																		'bottom' => 0
																	]
																],
																'maintainAspectRatio' => false,
															],
														]); ?>
												</div>


												<div id="north-america-legend">
													<div class="report-chart">
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color:#248afd"></div>
																<p class="mb-0">Pendapatan Daerah</p>
															</div>
															<p class="mb-0">30%</p>
														</div>
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color: #ffc100"></div>
																<p class="mb-0">Belanja Daerah</p>
															</div>
															<p class="mb-0">35%</p>
														</div>
														<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
															<div class="d-flex align-items-center">
																<div class="mr-3"
																	style="width:20px; height:20px; border-radius: 50%; background-color: #71c016"></div>
																<p class="mb-0">Pembiayaan Daerah</p>
															</div>
															<p class="mb-0">35%</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div
							style="position: absolute; top: 15px; right:15px; z-index: 1; display: flex; align-items: center; justify-content: center; width: 10%; text-align: center;">
							<a style="width:50px; height:50px;" class="carousel-control-prev bg-primary" href="#detailedReports"
								role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a style="width:50px; height:50px;" class="carousel-control-next bg-primary" href="#detailedReports"
								role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End PENGELOLAAN KEUANGAN DAERAH -->

	<!-- Start Indikator Pembangunan Provinsi Sumatera Utara -->
	<div class="row mb-4">
		<div class="col-md-12 grid-margin">
			<div class="card bg-white border-0 position-relative">
				<div class="card-body">
					<p style="margin-top: 40px;" class="card-title h5 text-gray-800 font-weight-bold text-uppercase">Indikator
						Pembangunan Provinsi Sumatera Utara</p>
					<div id="performanceOverview" class="carousel slide performance-overview-carousel position-static pt-2"
						data-ride="carousel">
						<div class="carousel-inner">

							<div class="carousel-item active">
								<p class="card-title h6 text-dark font-weight-normal text-gray-800 mb-4"><strong
										class="text-primary">Misi 1 :</strong> Mewujudkan masyarakat Sumatera Utara yang bermartabat dalam
									kehidupan karena memiliki iman dan taqwa, tersedianya sandang pangan yang cukup, rumah yang layak,
									kesehatan yang prima, mata pencaharian yang menyenangkan, serta harga-harga yang terjangkau:</p>

								<div class="row">

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
														style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary" data-toggle="modal"
														data-target="#DetailModal">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">68</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
														style="width: 68%" role="progressbar" aria-valuenow="68" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Nilai Tukar Petani (NTP)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary" data-toggle="modal"
														data-target="#DetailModalDua">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
														style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="row mt-4">

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">20</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
														style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">60</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
														style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">20</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
														style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-warning"></i> Akan Tercapai
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> Tercapai
									</span>
								</div>
							</div>

							<div class="carousel-item">
								<p class="card-title h6 text-dark font-weight-normal text-gray-800 mb-4"><strong
										class="text-primary">Misi 2 :</strong> Mewujudkan Sumatera Utara yang bermartabat dalam politik
									dengan
									adanya pemerintahan yang bersih dan dicintai, tata kelola pemerintah yang baik, adil dan terpercaya,
									politik yang beretika, masyarakat yang berwawasan kebangsaan dan memiliki kohesi sosial yang kuat
									serta
									harmonis:</p>

								<div class="row">

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
														style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
														style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
														style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="row mt-4">

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">20</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
														style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">60</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
														style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">20</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
														style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0"
														aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-warning"></i> Akan Tercapai
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> Tercapai
									</span>
								</div>
							</div>

						</div>

						<div
							style="position: absolute; top: 15px; right:15px; z-index: 1; display: flex; align-items: center; justify-content: center; width: 10%; text-align: center;">

							<a style="width:50px; height:50px;" class="carousel-control-prev bg-primary" href="#performanceOverview"
								role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a style="width:50px; height:50px;" class="carousel-control-next bg-primary" href="#performanceOverview"
								role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Indikator Pembangunan Provinsi Sumatera Utara -->

	<!-- Start Collapsable Card -->
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#collapseCardExample01" class="d-block card-header py-3" data-toggle="collapse" role="button"
			aria-expanded="true" aria-controls="collapseCardExample01">
			<h6 class="m-0 font-weight-bold text-primary">Misi 1</h6>
			<p class="card-title h6 text-dark font-weight-normal text-gray-800 mt-2">Mewujudkan masyarakat Sumatera Utara
				yang
				bermartabat dalam kehidupan karena memiliki iman dan taqwa, tersedianya sandang pangan yang cukup, rumah yang
				layak, kesehatan yang prima, mata pencaharian yang menyenangkan, serta harga-harga yang terjangkau : </p>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse" id="collapseCardExample01">
			<div class="card-body">

				<div>

					<div class="row">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row mt-4">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">60</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
											role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-warning"></i> Akan Tercapai
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-success"></i> Tercapai
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Collapsable Card -->

	<!-- Start Collapsable Card -->
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#collapseCardExample02" class="d-block card-header py-3" data-toggle="collapse" role="button"
			aria-expanded="true" aria-controls="collapseCardExample02">
			<h6 class="m-0 font-weight-bold text-primary">Misi 2</h6>
			<p class="card-title h6 text-dark font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang
				bermartabat dalam politik dengan adanya pemerintahan yang bersih dan
				dicintai, tata kelola pemerintah yang baik, adil dan terpercaya, politik yang beretika, masyarakat yang
				berwawasan
				kebangsaan dan memiliki kohesi sosial yang kuat serta harmonis:</p>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse" id="collapseCardExample02">
			<div class="card-body">

				<div>

					<div class="row">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row mt-4">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">60</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
											role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-warning"></i> Akan Tercapai
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-success"></i> Tercapai
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Collapsable Card -->

	<!-- Start Collapsable Card -->
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#collapseCardExample03" class="d-block card-header py-3" data-toggle="collapse" role="button"
			aria-expanded="true" aria-controls="collapseCardExample03">
			<h6 class="m-0 font-weight-bold text-primary">Misi 3</h6>
			<p class="card-title h6 text-dark font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang
				bermartabat
				dalam pendidikan karena masyarakatnya yang terpelajar, berkarakter, cerdas, kolaboratif, berdaya saing dan
				mandiri
				: </p>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse" id="collapseCardExample03">
			<div class="card-body">

				<div>

					<div class="row">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row mt-4">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">60</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
											role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-warning"></i> Akan Tercapai
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-success"></i> Tercapai
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Collapsable Card -->

	<!-- Start Collapsable Card -->
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#collapseCardExample04" class="d-block card-header py-3" data-toggle="collapse" role="button"
			aria-expanded="true" aria-controls="collapseCardExample04">
			<h6 class="m-0 font-weight-bold text-primary">Misi 4</h6>
			<p class="card-title h6 text-dark font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang
				bermartabat dalam pergaulan karena terbebas dari judi, narkoba, prostitusi dan penyelundupan, sehingga menjadi
				teladan di Asia Tenggara dan Dunia : </p>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse" id="collapseCardExample04">
			<div class="card-body">

				<div>

					<div class="row">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row mt-4">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">60</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
											role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-warning"></i> Akan Tercapai
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-success"></i> Tercapai
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Collapsable Card -->

	<!-- Start Collapsable Card -->
	<div class="card shadow mb-4">
		<!-- Card Header - Accordion -->
		<a href="#collapseCardExample05" class="d-block card-header py-3" data-toggle="collapse" role="button"
			aria-expanded="true" aria-controls="collapseCardExample05">
			<h6 class="m-0 font-weight-bold text-primary">Misi 5</h6>
			<p class="card-title h6 text-dark font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang
				bermartabat dalam lingkungan karena ekologinya yang terjaga, alamnya yang bersih dan indah, penduduknya
				yang ramah, berbudaya, berperikemanusiaan dan beradab : </p>
		</a>
		<!-- Card Content - Collapse -->
		<div class="collapse" id="collapseCardExample05">
			<div class="card-body">

				<div>

					<div class="row">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">80</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
											role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row mt-4">

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">60</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
											role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<p class="text-muted">Realisasi</p>
										<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
									</div>
									<div class="d-flex justify-content-between">
										<p class="h1 green-tosca">20</p>
										<p class="h1 old-blue">110</p>
									</div>
									<div class="progress progress-md">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
											role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
									<div class="text-center mt-4">
										<button type="button" class="btn btn-primary">Lihat Detail</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-warning"></i> Akan Tercapai
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-success"></i> Tercapai
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Collapsable Card -->

	<!-- Detail Modal-->
	<div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="DetailModalContent"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header align-items-center">
					<h5 class="modal-title" id="DetailModalContent">Skor Pola Pangan Harapan (PPH)</h5>
					<div class="badge badge-primary badge-pill ml-2">Misi 1</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Dilaksanakan melalui program :</p>

					<!-- Start Collapsable Card -->
					<div class="card shadow">
						<!-- Card Header - Accordion -->
						<a href="#collapseCardDetail01" class="d-block card-header py-3" data-toggle="collapse" role="button"
							aria-expanded="true" aria-controls="collapseCardDetail01">
							<h6 class="m-0 font-weight-bold text-primary">Program 1 : </h6>
							<p class="card-title h6 text-dark font-weight-normal text-gray-800 mt-2">Program Peningkatan
								Diversifikasi
								dan
								Ketahanan Pangan Masyarakat :
							</p>
						</a>
						<!-- Card Content - Collapse -->
						<div class="collapse" id="collapseCardDetail01">
							<div class="card-body">
								<div class="chart-bar">
									<?= ChartJs::widget([
										'type' => 'bar',
										'data' => [
											'labels' => ["2018", "2019", "2020", "2021", "2022", "2023", ],
											'datasets' => [
												[
													'label' => "My First dataset",
													'backgroundColor' => "rgba(26, 192, 198, 0.4)",
													'borderWidth' => 2,
													'hoverBackgroundColor' => "rgba(26, 192, 198, 1)",
													'borderColor' => "rgba(26, 192, 198, 1)",
													'data' => [20, 40, 60, 80, 100, 110, 0, 120]
												],
											]
										],
										'clientOptions' => [
											'legend' => [
												'display' => false,
												'position' => 'bottom',
												'labels' => [
													'fontSize' => 14,
													'fontColor' => "#425062",
												]
											],
											'tooltips' => [
												'enabled' => true,
												'intersect' => false,
											],

											'layout' => [
												'padding' => [
													'left' => 10,
													'right' => 25,
													'top' => 25,
													'bottom' => 0
												]
											],
											'maintainAspectRatio' => false,


										],
									]); ?>
								</div>
								<p>Target peningkatan Diversifikasi dan Ketahanan Pangan Masyarakat dari tahun <strong
										class="text-gray-800 font-weight-bold">2018 - 2023<strong></p>

							</div>
						</div>

					</div>
					<!-- End Collapsable Card -->

					<hr>
					<!-- Start Collapsable Card -->
					<div class="card shadow">
						<!-- Card Header - Accordion -->
						<a href="#collapseCardDetail02" class="d-block card-header py-3" data-toggle="collapse" role="button"
							aria-expanded="true" aria-controls="collapseCardDetail02">
							<h6 class="m-0 font-weight-bold text-primary">Program 2 : </h6>
							<p class="card-title h6 text-dark font-weight-normal text-gray-800 mt-2">Program Peningkatan
								Diversifikasi
								dan
								Ketahanan Pangan Masyarakat :
							</p>
						</a>
						<!-- Card Content - Collapse -->
						<div class="collapse" id="collapseCardDetail02">
							<div class="card-body">
								<div class="chart-bar">
									<?= ChartJs::widget([
										'type' => 'bar',
										'data' => [
											'labels' => ["2018", "2019", "2020", "2021", "2022", "2023", ],
											'datasets' => [
												[
													'label' => "My First dataset",
													'backgroundColor' => "rgba(26, 192, 198, 0.4)",
													'borderWidth' => 2,
													'hoverBackgroundColor' => "rgba(26, 192, 198, 1)",
													'borderColor' => "rgba(26, 192, 198, 1)",
													'data' => [20, 40, 60, 80, 100, 110, 0, 120]
												],
											]
										],
										'clientOptions' => [
											'legend' => [
												'display' => false,
												'position' => 'bottom',
												'labels' => [
													'fontSize' => 14,
													'fontColor' => "#425062",
												]
											],
											'tooltips' => [
												'enabled' => true,
												'intersect' => false,
											],

											'layout' => [
												'padding' => [
													'left' => 10,
													'right' => 25,
													'top' => 25,
													'bottom' => 0
												]
											],
											'maintainAspectRatio' => false,


										],
									]); ?>
								</div>
								<p>Target peningkatan Diversifikasi dan Ketahanan Pangan Masyarakat dari tahun <strong
										class="text-gray-800 font-weight-bold">2018 - 2023<strong></p>

							</div>
						</div>

					</div>
					<!-- End Collapsable Card -->
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
