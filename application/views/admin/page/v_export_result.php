 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
 
                <th>Kode Barang</th>
 
                <th>Nama Barang</th>
                <th>Kategori Barang</th>
                <th>Kasir</th>
              
                <th>Jumlah</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach($result as $row) { ?>
 
           <tr>
 
                <td><?php echo $row->kode_barang; ?></td>
                <td><?php echo $row->nama_barang; ?></td>
                <td><?php echo $row->nama_category; ?></td>
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->total; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>