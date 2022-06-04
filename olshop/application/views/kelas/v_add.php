<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add Class</h3>
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
            
            echo form_open_multipart('class/add') ?>
       

          

            <!-- /.sub_kategori --> 

            <div class="form-group">
                        <label>Nama Class</label>
                        <input name="nama_class" class="form-control" placeholder="Nama Class" value="<?= 
                        set_value('nama_class')?>">
                </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Sub kategori</label>
                       <select name="id_subkategori" class="form-control"> 
                       <option value="">--Pilih Sub Kategori--</option>
                       <?php foreach ($kelas as $key => $value) {?>
                           <option value="<?= $value->id_subkategori ?>"><?= $value->nama_subkategori ?></option>
                           <?php }?>
                       </select>
                    </div>
                  </div>
                 

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('kelas') ?>" class="btn btn-success btn-sm">kembali</a>
                    </div>
                    
            <?php echo form_close() ?>
            </div>
    </div>
</div>

