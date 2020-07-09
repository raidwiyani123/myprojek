<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> AYU EKATANTI</title>

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="../../../../global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/minified/components.min.css" rel="stylesheet" typedom="text/css">
<link href="<?php echo base_url()?>assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/colors.min.css" rel="stylesheet" type="text/css">

<!-- /global stylesheets -->

<!-- Core JS files -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/app.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/datatables_data_sources.js"></script>
<!-- /theme JS files -->
<!-- /theme JS files -->

</head>
    <body>
    <div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?php echo base_url()?>assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">							
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					</a>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholder.jpg" alt="">
						<span> Ayu Ekayanti</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href='<?php echo site_url('login/logout')?>'><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="<?php echo base_url()?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">PENGINAPAN LESTARI</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;SINGARAJA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Data Penginapan</span></a>
									<ul>
										<li class="active"><a href="<?= site_url('pegawai_controller')?>">Kelola Data Pegawai</a></li>
										<li ><a href="<?= site_url('tamu_controller')?>">Kelola Data Tamu</a></li>
										<li  ><a href="<?= site_url('kamar_controller')?>">Kelola Data Kamar</a></li>
										<li ><a href="<?= site_url('pemesan_controller')?>">Kelola Data Pemesan</a></li>
										<li ><a href="<?= site_url('reservasi_controller')?>">Kelola Data Reservasi</a></li>
									</ul>
								</li>
								
								<!-- forms -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Input barang</h4>
						</div>

						<div class="heading-elements">
							
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_inputs_basic.html">Forms</a></li>
							<li class="active">Input barang</li>
						</ul>

						<ul class="breadcrumb-elements">
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Input Data Pegawai</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
						<?php if ($this->session->flashdata('success')): ?>
						 		<div class="alert alert-success">
                				<ul class="list-unstyled">
                        				<li><?php echo $this->session->flashdata('success'); ?></li>
                				</ul>
            				</div>
        					<?php endif; ?>
							<form class="form-horizontal" method="POST" action="add">
								<fieldset class="content-group">
									<legend class="text-bold"></legend>
									
									<div class="form-group">
										<label class="control-label col-lg-2">id pegawai*</label>
										<div class="col-lg-10">
											<input class="form-control <?php echo form_error('PG_ID') ? 'is-invalid':'' ?>" type="text" name="PG_ID" placeholder="" />
										</div>
										<div class="invalid-feedback">
											<?php echo form_error('PG_ID') ?>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">nama pegawai*</label>
										<div class="col-lg-10">
										<input class="form-control <?php echo form_error('PG_NAMA') ? 'is-invalid':'' ?>" type="text" name="PG_NAMA" placeholder="" />
										</div>
										<div class="invalid-feedback">
											<?php echo form_error('PG_NAMA') ?>
										</div>
                                    </div>
                                    
									
									<div class="form-group">
									<label class="control-label col-lg-2">jenis kelamin*</label>
										<div class="col-lg-10">
											<input class="form-control <?php echo form_error('PG_JENISKELAMIN') ? 'is-invalid':'' ?>" type="text" name="PG_JENISKELAMIN" placeholder="" /></div>
										<div class="invalid-feedback">
											<?php echo form_error('PG_JENISKELAMIN') ?>
										</div>
									</div>
									
									<div class="form-group">
									<label class="control-label col-lg-2">alamat*</label>
										<div class="col-lg-10">
											<input class="form-control <?php echo form_error('PG_ALAMAT') ? 'is-invalid':'' ?>" type="text" name="PG_ALAMAT" placeholder="" /></div>
										<div class="invalid-feedback">
											<?php echo form_error('PG_ALAMAT') ?>
										</div>
                                    </div>

									<div class="form-group">
									<label class="control-label col-lg-2">no tlp*</label>
										<div class="col-lg-10">
											<input class="form-control <?php echo form_error('PG_TLP') ? 'is-invalid':'' ?>" type="text" name="PG_TLP" placeholder="" /></div>
										<div class="invalid-feedback">
											<?php echo form_error('PG_TLP') ?>
										</div>
									</div>
									
									
									
								</fieldset>
								<div class="text-right">
									<button type="submit"  onclick="location.href='<?php echo site_url('pegawai_controller/')?>'">Save<i class="icon-arrow-right14 position-right"></i></button>
								</div>
								

								<div class="text-right">
								<button type="button"  onclick="location.href='<?php echo site_url('pegawai_controller/')?>'">Back<i class="icon-arrow-right14 position-right"></i></button>
								
								</div>
							</form>
						</div>
					</div>
					<!-- /form horizontal -->

					
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2020. <a href="#">PENGINAPAN LESTARI</a> by <a>AYU EKAYANTI</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>