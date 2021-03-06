<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Produk/Barang</h3>

                <div class="card-tools">
                  <a href="<?= base_url('barang/add') ?>" type="button" class="btn btn-primary btn-sm" >
                    <i class="fas fa-plus"></i>Add</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
        <div class="card-body">

        <?php 
         if ($this->session->flashdata('pesan')) 
         {
            echo'<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success!</h5>';
            echo $this->session->flashdata('pesan');
            echo '</div>';
         }
        
        ?>
            <table class="table table-bordered" id="example1">
                <thead class="text text-center">
                        <tr>
                        <th width="5px">No</th>
                        <th width="5px">Kategori</th> 
                        <th width="5px">Subkategori</th>
                        <th width="5px">Class</th>
                        <th width="10px">Supplier</th>
                        <th width="10px">Nama Produk</th>
                        <th width="5px">Stok</th>
                        <th width="10px">Deskripsi/Status</th>
                        <th width="5px">Harga</th>
                        <th width="5px">Gambar</th>
                        <th width="5px">Action</th>
                        </tr>
                </thead>
                <tbody>        
                    <?php $no = 1;
                     foreach ($barang as $key => $value) { ?>
                        <tr>
                            <td class="text text-center"><?= $no++ ?></td>
                            <td class="text text-center"><?= $value->nama_kategori ?></td>
                            <td class="text text-center"><?= $value->nama_subkategori ?></td>
                            <td class="text text-center"><?= $value->nama_class ?></td>
                            <td class="text text-center"><?= $value->nama_supplier ?></td>
                            <td class="text text-center" ><?= $value->nama_barang ?></td>
                            <td class="text text-center"><?= $value->stok ?></td>
                            <td class="text text-center"><?= $value->deskripsi ?></td>
                            <td class="text text-center">Rp.<?= number_format($value->harga, 0) ?></td>
                            <td class="text text-center"><img src="<?= base_url('assets/gambar/' . 
                            $value->gambar)  ?>" width="150px"></td>
                            
                        

                                <td class="text text-center">
                                    <a href="<?= base_url('barang/edit/' .$value->id_barang) ?>" 
                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    
                                <a class="btn btn-danger btn-sm" data-toggle="modal" 
                                data-target="#delete<?= $value->id_barang ?>"><i class="fas fa-trash"></i></a>
                                </td>
                        </tr>

             
                     <?php } ?>
                </tbody>
            </table>

          

            <!-- <table class="table table-bordered" id="example1">
                <thead class="text text-center">
                        <tr>
                        <th >No</th>
                        <th >Nama Barang</th> 
                        <th >Kategori</th>
                        <th >stok</th>
                        <th >Harga</th>
                        <th >Gambar</th>
                        <th >Action</th>
                        </tr>
                </thead>
                <tbody>        
                    <?php $no = 1;
                     foreach ($barang as $key => $value) { ?>
                        <tr>
                            <td class="text text-center"><?= $no++ ?></td>
                            <td ><?= $value->nama_barang ?></td>
                            <td class="text text-center"><?= $value->nama_kategori ?></td>
                            <td class="text text-center"><?= $value->stok ?></td>
                            <td class="text text-center">Rp.<?= number_format($value->harga, 0) ?></td>
                            <td class="text text-center"><img src="<?= base_url('assets/gambar/' . 
                            $value->gambar)  ?>" width="150px"></td>
                            
                            
               <td class="text text-center">
                  <a href="<?= base_url('barang/edit/' . $value->id_barang) ?>" 
                  class="btn btn-warning btn-sm" 
                  data-toggle="modal"><i class="fas fa-edit"></i></a>
                  <a href="<?= base_url('barang/delete/'. $value->id_barang) ?>" 
                  class="btn btn-danger btn-sm" data-toggle="modal">
                  <i class="fas fa-trash"></i></a>
              </td>
                        </tr>
                     <?php } ?>
                </tbody>
            </table> -->


        </div>
             
    </div>
         
</div>

  <!-- modal delete-->
 <?php foreach ($barang as $key => $value) { ?>
 <div class="modal fade" id="delete<?= $value->id_barang ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->nama_barang ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6>Apakah anda yakin ingin Menghapus Data ini....?</h6>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('barang/delete/' . $value->id_barang) ?>" class="btn btn-primary">Delete</a>
            </div>

        </div>
       
    </div>
       
</div>
 <?php } ?>
 
       



 