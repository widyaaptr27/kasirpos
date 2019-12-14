<div class="block">
	<div class="block-header block-header-default">

	</div>
	<div class="block-content block-content-full">
		<button type="button" class="btn btn-hero btn-info text-uppercase mb-10" data-toggle="modal" data-target="#modal-large">+ Kategori</button>
		<hr>
		<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th>Kode Kategori</th>
					<th class="d-none d-sm-table-cell">Nama Kategori</th>
					<th class="d-none d-sm-table-cell">Gambar Barang</th>

					<th class="d-none d-sm-table-cell">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i = 0;
				foreach ($kategori as $row) {
					$i++;
					?>

					<tr>
						<td class="text-center">
							<?php echo $i; ?>
						</td>
						<td class="font-w600">
							<?php echo $row->kode_category; ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $row->nama_category; ?>
						</td>

						<td class="d-none d-sm-table-cell">
							<img src="<?php echo base_url(); ?>images/Barang/<?php echo $row->gbr_brg ?> " height="90px" width="90px;">
						</td>

						<td class="text-center">
							<a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $row->kode_category;?>" title="Edit Kategori">
								<i class="fa fa-edit"></i> &nbsp;
							</a>
							<a href="<?php echo site_url('KategoriBarang/deleteKategori/'.$row->kode_category) ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Kategori" onclick="return confirm('Hapus Data ?');">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php
				}

				?>
			</tbody>
		</table>
	</div>
</div>

<?php 
foreach ($kategori as $key) {

	?>

	<div class="modal fade" id="modal_edit<?php echo $key->kode_category;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"> 
					<h3 class="modal-title" id="myModalLabel">Edit Kategori</h3>
				</div>
				<form class="form-horizontal" method="post" action="<?php echo site_url('KategoriBarang/updateKategori/'.$key->kode_category) ?>">
					<input type="hidden" name="kode" value="<?php echo $key->kode_category; ?>">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-xs-3">Kode Kategori</label>
							<div class="col-xs-8">
								<input name="kode_category" value="<?php echo $key->kode_category;?>" disabled class="form-control" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3">Nama Kategori</label>
							<div class="col-xs-8">
								<input name="nama_category" value="<?php echo $key->nama_category;?>" class="form-control" type="text">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						<button class="btn btn-info">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php }?>


<!-- Large Modal -->
<div class="modal fade" id="modal-large" tabindex="-1" role="dialog" aria-labelledby="modal-large" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="block block-themed block-transparent mb-0">
				<div class="block-header bg-primary-dark">
					<h3 class="block-title">Tambah Data Kategori</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
							<i class="si si-close"></i>
						</button>
					</div>
				</div>
				<div class="block-content">
					<form action="<?php echo site_url('KategoriBarang/addKategori') ?>" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<label for="example-nf-email">Kode Kategori</label>
							<input type="text" class="form-control" name="kode_kategori" placeholder="Masukan Kode Kategori" required>
						</div>
						<div class="form-group">
							<label for="example-nf-email">Nama Kategori</label>
							<input type="text" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori" required>
						</div>

						<div class="form-group">
							<label for="example-nf-email">Gambar Barang</label>
							<input type="file" class="form-control" name="gbr_brg"  placeholder="Masukan Gambar Produk" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-alt-success"><i class="fa fa-check"></i> Save Data</button>
						<button type="button" class="btn btn-alt-warning" data-dismiss="modal">
							Close
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END Large Modal -->
