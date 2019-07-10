<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/form/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/form/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $user->user_id?>" />

							<div class="form-group">
								<label for="satker">Satker/PPKP2JN</label>
								<input class="form-control <?php echo form_error('satker') ? 'is-invalid':'' ?>"
								 type="text" name="satker" placeholder="" value="<?php echo $user->satker ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('satker') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kepalaSatker">Kepala Satker</label>
								<input class="form-control <?php echo form_error('kepalaSatker') ? 'is-invalid':'' ?>"
								 type="text" name="kepalaSatker" placeholder="" value="<?php echo $user->kepalaSatker ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kepalaSatker') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nip">NIP</label>
								<input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
								 type="text" name="nip" placeholder="" value="<?php echo $user->nip ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nip') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tahunAnggaran">Tahun Anggaran</label>
								<input class="form-control <?php echo form_error('tahunAnggaran') ? 'is-invalid':'' ?>"
								 type="text" name="tahunAnggaran" placeholder="misal : 2019" value="<?php echo $user->tahunAnggaran ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tahunAnggaran') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="noKontrak">Nomor Kontrak</label>
								<input class="form-control <?php echo form_error('noKontrak') ? 'is-invalid':'' ?>"
								 type="text" name="noKontrak" placeholder="" value="<?php echo $user->noKontrak ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('noKontrak') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tglKontrak">Tanggal Kontrak</label>
								<input class="form-control <?php echo form_error('tglKontrak') ? 'is-invalid':'' ?>"
								 type="text" name="tglKontrak" placeholder="misal : 2019-01-01" value="<?php echo $user->tglKontrak ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tglKontrak') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="" value="<?php echo $user->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kategoriTenaga">Kategori Tenaga</label>
								<input class="form-control <?php echo form_error('kategoriTenaga') ? 'is-invalid':'' ?>"
								 type="text" name="kategoriTenaga" placeholder="" value="<?php echo $user->kategoriTenaga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kategoriTenaga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" placeholder="" value="<?php echo $user->username ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" placeholder="" value="<?php echo $user->password ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan">Jabatan</label>
								<input class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>"
								 type="text" name="jabatan" placeholder="" value="<?php echo $user->jabatan ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('jabatan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="noTelp">Nomor Telepon</label>
								<input class="form-control <?php echo form_error('noTelp') ? 'is-invalid':'' ?>"
								 type="text" name="noTelp" placeholder="" value="<?php echo $user->noTelp ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('noTelp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tglMobilisasi">Tanggal Mobilisasi</label>
								<input class="form-control <?php echo form_error('tglMobilisasi') ? 'is-invalid':'' ?>"
								 type="text" name="tglMobilisasi" placeholder="misal : 2019-01-01" value="<?php echo $user->tglMobilisasi ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('tglMobilisasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tglDemobilisasi">Tanggal Demobilisasi</label>
								<input class="form-control <?php echo form_error('tglDemobilisasi') ? 'is-invalid':'' ?>"
								 type="text" name="tglDemobilisasi" placeholder="misal : 2019-01-01" value="<?php echo $user->tglDemobilisasi ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('tglDemobilisasi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jamMasuk">Jam Masuk</label>
								<input class="form-control <?php echo form_error('jamMasuk') ? 'is-invalid':'' ?>"
								 type="text" name="jamMasuk" placeholder="misal 08:00:00" value="<?php echo $user->jamMasuk ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('jamMasuk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="latitude">Latitude</label>
								<input class="form-control <?php echo form_error('latitude') ? 'is-invalid':'' ?>"
								 type="numeric" name="latitude" placeholder="" value="<?php echo $user->latitude ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('latitude') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="longitude">Longitude</label>
								<input class="form-control <?php echo form_error('longitude') ? 'is-invalid':'' ?>"
								 type="numeric" name="longitude" placeholder="" value="<?php echo $user->longitude ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('longitude') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $user->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>