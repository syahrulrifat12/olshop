<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Supplier</h3>

                <div class="card-tools">
                <a href="<?= base_url('supplier/add') ?>" type="button" class="btn btn-primary btn-sm" >
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
                        <th>ID Supplier</th>
                        <th>Nama Supplier</th> 
                        <th>Nama Barang</th> 
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                        </tr>
                </thead>
                <tbody>        
                    <?php $no = 1;
                     foreach ($supplier as $key => $value) { ?>
                        <tr>
                            <td class="text text-center"><?= $no++ ?></td>
                            <td class="text text-center"><?= $value->nama_supplier ?></td>
                            <td class="text text-center"><?= $value->nama_barang ?></td>
                            <td class="text text-center"><?= $value->nomor_telepon ?></td>
                            <td class="text text-center"><?= $value->alamat ?></td>
                      
                            
                            <td class="text text-center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" 
                            data-target="#edit<?= $value->id_supplier ?>" >
                            <i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" 
                            data-target="#delete<?= $value->id_supplier ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                     <?php } ?>
                </tbody>
            </table>


        </div>
              <!-- /.card-body -->
    </div>
            <!-- /.card -->
</div>