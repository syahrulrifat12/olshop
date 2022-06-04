<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add subkategori</h3>
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
            
            echo form_open_multipart('sub_kategori/add') ?>
       

          

            <!-- /.sub_kategori --> 

            <div class="form-group">
                        <label>Nama Subkategori</label>
                        <input name="nama_subkategori" class="form-control" placeholder="Nama subkategori" value="<?= 
                        set_value('nama_subkategori')?>">
                </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>kategori</label>
                       <select name="id_kategori" class="form-control"> 
                       <option value="">--Pilih Kategori--</option>
                       <?php foreach ($sub_kategori as $key => $value) {?>
                           <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                           <?php }?>
                       </select>
                    </div>
                  </div>
                 

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('sub_kategori') ?>" class="btn btn-success btn-sm">kembali</a>
                    </div>
                    
            <?php echo form_close() ?>
            </div>
    </div>
</div>

