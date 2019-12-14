<div class="block">
    <div class="block-header block-header-default">

    </div>
    <div class="block-content block-content-full">
        <button type="button" class="btn btn-hero btn-info text-uppercase mb-10" data-toggle="modal" data-target="#modal-large">+ Karyawan</button>
        <hr>
        <div><?php $this->session->flashdata('message') ?></div>
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th class="d-none d-sm-table-cell">Jabatan</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">username</th>
                       <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                    <th class="text-center" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 0;
                foreach ($karyawan as $row) {
                    $i++;
                    ?>

                    <tr>
                        <td class="text-center">
                            <?php echo $i; ?>
                        </td>
                        <td class="font-w600">
                            <?php echo $row->nama_user ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php echo $row->jabatan ?>
                        </td>
                          <td class="d-none d-sm-table-cell">
                            <?php echo $row->username?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php 
                            if ($row->status=='notactive') {
                             echo "<span class='badge badge-danger'>".$row->status."</span>";
                         }else{
                             echo "<span class='badge badge-success'>".$row->status."</span>";
                         }
                         ?>
                     </td>
                     <td class="text-center">
                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $row->id_user;?>" title="Edit Karyawan">
                            <i class="fa fa-edit"></i> &nbsp;
                        </a>
                        <a href="<?php echo site_url('KaryawanController/deleteKaryawan/'.$row->id_user) ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Karyawan" onclick="return confirm('Hapus Data ?');">
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
foreach ($karyawan as $key) {

    ?>
    
    <div class="modal fade" id="modal_edit<?php echo $key->id_user;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> 
                    <h3 class="modal-title" id="myModalLabel">Edit Karyawan</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('KaryawanController/updateKaryawan/'.$key->id_user) ?>">
                    <input type="hidden" name="id" value="<?php echo $key->id_user; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama User</label>
                            <div class="col-xs-8">
                                <input name="nama_user" value="<?php echo $key->nama_user;?>" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-xs-3">Username</label>
                            <div class="col-xs-8">  
                                <input name="username" value="<?php echo $key->username;?>" class="form-control" type="text" required>
                            </div>
                        </div> 
                        <div class="form-group"> 
                            <label class="control-label col-xs-3">Password</label>
                            <div class="col-xs-8">  
                                <input name="password"class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Jabatan</label>
                            <div class="col-xs-8">
                                <select name="jabatan" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="admin">Admin</option>
                                    <option value="karyawan">Karyawan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Status</label>
                            <div class="col-xs-8">
                                <select name="status" class="form-control" required>
                                    <option value="">-PILIH-</option>
                                    <option value="active">Active</option>
                                    <option value="notactive">NotActive</option>
                                </select>
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
                    <h3 class="block-title">Tambah Data Karyawan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="<?php echo site_url('KaryawanController/addKaryawan') ?>" method="post">
                        <div class="form-group">
                            <label for="example-nf-email">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masuka Nama Karyawan">
                        </div>
                        <label for="example-nf-email">Jabatan</label>
                        <select class="form-control" name="jabatan">
                            <option value="admin">Admin</option>
                            <option value="karyawan">Karyawan</option>
                        </select>
                        <input type="hidden" name="status" value="notactive">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-nf-email">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="example-nf-password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password..">
                                </div>
                            </div>
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
