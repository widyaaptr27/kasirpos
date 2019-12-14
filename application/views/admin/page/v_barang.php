<div class="block">
	<div class="block-header block-header-default">

	</div>
	<div class="block-content block-content-full">
		<button type="button" class="btn btn-hero btn-info text-uppercase mb-10" data-toggle="modal" data-target="#modal-large">+ Barang</button>
		<hr>
		<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th>Kode Barang</th>
					<th>Kategori</th>
					<th class="d-none d-sm-table-cell">Nama Barang</th>
					<th class="d-none d-sm-table-cell" style="width: 15%;">Harga Barang</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Stock Barang</th>
					<th class="text-center" style="width: 15%;">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i = 0;
				foreach ($barang as $row) {
					$i++;
					?>

					<tr>
						<td class="text-center">
							<?php echo $i; ?>
						</td>
						<td class="font-w600">
							<?php echo $row->kode_barang ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $row->kode_category ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $row->nama_barang ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo number_format($row->harga_barang, 0, '', '.'); ?>
						</td>
						<td class="d-none d-sm-table-cell">
							<?php echo $row->stock_barang ?>
						</td>
						<td class="text-center">
							<a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $row->kode_barang;?>" title="Edit Karyawan">
								<i class="fa fa-edit"></i> &nbsp;
							</a>
							<a href="<?php echo site_url('BarangController/deleteBarang/'.$row->kode_barang) ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Karyawan" onclick="return confirm('Hapus Data ?');">
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
foreach ($barang as $key) {

    ?>
    
    <div class="modal fade" id="modal_edit<?php echo $key->kode_barang;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> 
                    <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('BarangController/updateBarang/'.$key->kode_barang) ?>">
                    <input type="hidden" name="id" value="<?php echo $key->kode_barang ?>">
                    <div class="modal-body">
                        <div class="form-group">
    							<label for="example-nf-email">Kode Barang</label>
    							<input type="text" class="form-control" name="kode_barang" value="<?php echo $key->kode_barang ?>" placeholder="Masukan Kode Barang">
    						</div>
    						<div class="form-group">
    							<label for="example-nf-email">Nama Barang</label>
    							<input type="text" class="form-control" name="nama_barang" value="<?php echo $key->nama_barang ?>" placeholder="Masukan Nama Barang">
    						</div>
    						<label for="example-nf-email">Kategori</label>
    						<select class="form-control" name="kode_category">
    							<option value="0">- Pilih Kategori -</option>
    							<?php
    							foreach ($kategori as $row) { ?>
    								<option value="<?php echo $row->kode_category ?>"><?php echo $row->nama_category; ?></option>
    								<?php
    							}

    							?>
    						</select>
    						<div class="row">
    							<div class="col-md-6">
    								<label for="example-nf-email">Harga Barang</label>
    								<input type="text" value="<?php echo $key->harga_barang ?>" class="form-control"  name="harga_barang" >
                                    
    							</div>
    							<div class="col-md-6">
    								<label for="example-nf-email">Stok Barang</label>
    								<input type="number" class="form-control" name="stock_barang" value="<?php echo $key->stock_barang ?>">
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
    					<h3 class="block-title">Tambah Data Barang</h3>
    					<div class="block-options">
    						<button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
    							<i class="si si-close"></i>
    						</button>
    					</div>
    				</div>
    				<div class="block-content">
    					<form action="<?php echo site_url('BarangController/addBarang') ?>" method="post">
    						<div class="form-group">
    							<label for="example-nf-email">Kode Barang</label>
    							<input type="text" class="form-control" name="kode_barang" placeholder="Masukan Kode Barang">
    						</div>
    						<div class="form-group">
    							<label for="example-nf-email">Nama Barang</label>
    							<input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang">
    						</div>
    						<label for="example-nf-email">Kategori</label>
    						<select class="form-control" name="kode_category">
    							<option value="0">- Pilih Kategori -</option>
    							<?php
    							foreach ($kategori as $key) { ?>
    								<option value="<?php echo $key->kode_category ?>"><?php echo $key->nama_category; ?></option>
    								<?php
    							}

    							?>
    						</select>
    						<div class="row">
    							<div class="col-md-6">
    								<label for="example-nf-email">Harga Barang</label>
    								<input type="number" class="form-control" name="harga_barang" placeholder="Masukan Harga Barang">
    							</div>
    							<div class="col-md-6">
    								<label for="example-nf-email">Stok Barang</label>
    								<input type="number" class="form-control" name="stock_barang" placeholder="Masukan Stok Barang">
    							</div>
    						</div>
    					</div>
    					<hr>
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
