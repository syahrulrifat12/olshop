<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add Supplier</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">


            <?php 
            //notifikasi form barang

            echo validation_errors(' <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info"></i>','</h5></div>'); 
           

            //notifikasi gagal upload

            if(isset($error_upload)) {
              echo'<div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5></div>';
            }
            
            echo form_open_multipart('supplier/add') ?>
       

          

            <!-- /.sub_kategori --> 

            <div class="form-group">
                        <label>Nama Supplier</label>
                        <input name="nama_supplier" class="form-control" placeholder="Nama supplier" value="<?= 
                        set_value('nama_supplier')?>">
                </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Barang</label>
                       <select name="id_barang" class="form-control"> 
                       <option value="">--Pilih Barang--</option>
                       <?php foreach ($supplier as $key => $value) {?>
                           <option value="<?= $value->id_barang?>"><?= $value->nama_barang ?></option>
                           <?php }?>
                       </select>
                    </div>
                  </div>
                 

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('supplier') ?>" class="btn btn-success btn-sm">kembali</a>
                    </div>
                    
            <?php echo form_close() ?>
            </div>
    </div>
</div>

