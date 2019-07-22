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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Rekanan</th>
										<th>Nomor Telepon</th>
										<th>Tanggal Mobilisasi</th>
										<th>Tanggal Demobilisasi</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $user): ?>
									<tr>
										<td width="150">
											<?php echo $user->nama ?>
										</td>
										<td>
											<?php echo $user->satker ?>
										</td>
										<td>
											<?php echo $user->noTelp ?>
										</td>
										<td>
											<?php echo $user->tglMobilisasi ?>
										</td>
										<td>
											<?php echo $user->tglDemobilisasi ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/Absen/rekapAbsen/'.$user->user_id) ?>">Lihat Rekap Absen</a>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/Absen/rekapAbsen/'.$user->user_id) ?>">Lihat Rekap Hadir</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>