<div class="row">
	<div class="col-md-12">
		<!-- Normal Form -->
		<div class="block">
			<div class="block-header block-header-default">
				<h3 class="block-title">Transaksi Form</h3>
				<div class="block-options">
					<button type="button" class="btn-block-option">
						<i class="si si-wrench"></i>
					</button>
				</div>
			</div>
			<div class="block-content">
				<form action="<?php echo site_url('TransaksiController/addTransaksi') ?>" method="post">
					<div class="form-group">
						<label for="example-nf-email">Jenis Barang</label>
						<select class="form-control" name="kode_barang">
							<option>- PILIH BARANG -</option>
							<?php 
								foreach ($barang as $row) {
							?>
							<option value="<?php echo $row->kode_barang ?>"><?php echo $row->nama_barang ?></option>
							

							<?php
								}
							?>
						</select>
					</div>
					<input type="hidden" name="username" value="<?php echo $this->session->userdata('sess_name'); ?>">
					<div class="form-group">
						<label for="example-nf-password">Jumlah</label>
						<input type="number" class="form-control" name="total">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-alt-primary">Send</button>
						<button type="submit" class="btn btn-alt-warning">Selesai</button>
					</div>


				</form>
			</div>
		</div>
		<!-- END Normal Form -->
	</div>
</div>
<div class="block">
	<div class="block-content block-content-full">
		<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
				<h3>Hasil Transaksi</h3>
			<!-- 	<a href="<?php echo site_url('TransaksiController/export_excel') ?>" class="btn btn-success">EXPORT EXCEL</a> -->
				<a href="<?php echo "Tanggal : ".date('d-m-Y'); ?>" class="btn btn-danger">EXPORT PDF</a>
				<hr>
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th class="d-none d-sm-table-cell">Kategori</th>
					<th class="d-none d-sm-table-cell" style="width: 15%;">Total Barang</th>
					<th class="d-none d-sm-table-cell" style="width: 15%;">User</th>
					<!-- <th class="text-center" style="width: 15%;">Aksi</th> -->
				</tr>
			</thead>
			<tbody>
				<?php 
				$i = 0;
				foreach ($result as $awe) {
					$i++;
					?>

					<tr>
						<td class="text-center">
							<?php echo $i; ?>
						</td>
						<td class="font-w600">
							<?php echo $awe->kode_barang ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $awe->nama_barang ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $awe->nama_category ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $awe->total ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $awe->id_user ?>
						</td>
					</tr>
					<?php
				}

				?>
			</tbody>
		</table>
		</div>
	</div>
</div>
	</div>
	
</div>