<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Rental Mobil</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Blank Page</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">FORM SEWA MOBIL</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div id="booking" class="section">
					<div class="section-center">
						<div class="container">
							<div class="row">
								<div class=" col-sm-12">
									<div class="booking-form">
										<form>
											<div class="form-group row">
												<label for="nik" class="col-4 col-form-label">NIK</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-address-card"></i>
															</div>
														</div>
														<input id="nik" name="nik" placeholder="NIK KTP" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="nama" class="col-4 col-form-label">Nama</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-address-book"></i>
															</div>
														</div>
														<input id="nama" name="nama" placeholder="Nama Anda" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="nopol" class="col-4 col-form-label">Nopol</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-car"></i>
															</div>
														</div>
														<input id="nopol" name="nopol" placeholder="BXXXXABC" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="merkid" class="col-4 col-form-label">Merk</label>
												<div class="col-8">
													<input id="merkid" name="merkid" placeholder="merk id" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
												</div>
											</div>
											<div class="form-group row">
												<label for="warna" class="col-4 col-form-label">Warna</label>
												<div class="col-8">
													<input id="warna" name="warna" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
												</div>
											</div>
											<div class="form-group row">
												<label for="biaya" class="col-4 col-form-label">Biaya</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa "></i>
															</div>
														</div>
														<input id="biaya" name="biaya" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="tglmulai" class="col-4 col-form-label">Tanggal Mulai</label>
												<div class="col-8">
													<div class="input-group">
														<input id="tglmulai" name="tglmulai" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
														<div class="input-group-append">
															<div class="input-group-text">
																<i class="fa fa-calendar"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="tglselesai" class="col-4 col-form-label">Tanggal Selesai</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-calendar"></i>
															</div>
														</div>
														<input id="tglselesai" name="tglselesai" type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" spellcheck="false" data-ms-editor="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="tujuan" class="col-4 col-form-label">Tujuan</label>
												<div class="col-8">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fa fa-location-arrow"></i>
															</div>
														</div>
														<input id="tujuan" name="tujuan" type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" spellcheck="false" data-ms-editor="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="mobil_id" class="col-4 col-form-label">Mobil</label>
												<div class="col-8">
													<select id="mobil_id" name="mobil_id" class="custom-select">
														<option value="Toyota">Toyota</option>
														<option value="Honda">Honda</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<div class="offset-4 col-8">
													<button name="submit" type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- <div class=" col-sm-8">
									<table class="table table-striped table-bordered ">
										<thead>
											<tr>
												<th>NO</th>
												<th>NOPOL</th>
												<th>MERK ID</th>
												<th>MERK</th>
												<th>PRODUK</th>
												<th>WARNA</th>
												<th>BIAYA SEWA</th>
												<th>CC</th>
												<th>MOBIL ID</th>
												<th>Tahun</th>


											</tr>
										</thead>
										<tbody>
											<?php
											$nomor = 1;
											foreach ($list_mobil as $obj) {
											?>
												<tr>
													<td><?= $nomor ?></td>
													<td><?= $obj->nopol ?></td>
													<td><?= $obj->merk_id ?></td>
													<td><?= $obj->merk ?></td>
													<td><?= $obj->produk ?></td>
													<td><?= $obj->warna ?></td>
													<td><?= $obj->biaya_sewa ?></td>
													<td><?= $obj->cc ?></td>
													<td><?= $obj->mobil_id ?></td>
													<td><?= $obj->tahun ?></td>
												</tr>

											<?php
												$nomor++;
											} ?>
										</tbody>
									</table> -->

								</div>
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							Footer
						</div>
						<!-- /.card-footer-->
					</div>
				</div>
			</div>
		</div>

</div> <!-- /.card -->

</section>
<!-- /.content -->
</div>