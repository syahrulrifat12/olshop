<div class="col-md-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add Produk/Barang</h3>
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
            
            echo form_open_multipart('barang/add') ?>
       

            <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>kategori</label>
                       <select name="id_kategori" class="form-control"> 
                       <option value="">--Pilih Kategori--</option>
                       <?php foreach ($kategori as $key => $value) {?>
                           <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                           <?php }?>
                       </select>
                    </div>
                  </div>

            <!-- /.sub_kategori --> 
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Sub kategori</label>
                       <select name="id_subkategori" class="form-control"> 
                       <option value="">--Pilih Sub Kategori--</option>
                       <?php foreach ($sub_kategori as $key => $value) {?>
                           <option value="<?= $value->id_subkategori ?>"><?= $value->nama_subkategori ?></option>
                           <?php }?>
                       </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Class</label>
                       <select name="id_class" class="form-control"> 
                       <option value="">--Pilih Class--</option>
                       <?php foreach ($class as $key => $value) {?>
                           <option value="<?= $value->id_class ?>"><?= $value->nama_class ?></option>
                           <?php }?>
                       </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Supplier</label>
                       <select name="id_supplier" class="form-control"> 
                       <option value="">--Pilih Supplier--</option>
                       <?php foreach ($supplier as $key => $value) {?>
                           <option value="<?= $value->id_supplier ?>"><?= $value->nama_supplier ?></option>
                           <?php }?>
                       </select>
                    </div>
                  </div>
                    
            </div>

                <div class="form-group">
                        <label>Nama Produk</label>
                        <input name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?= 
                        set_value('nama_barang')?>">
                </div>

                <div class="form-group">
                        <label>Stok produk</label>
                        <input name="stok" class="form-control" placeholder="Stok Produk" value="<?= 
                        set_value('stok')?>">
                </div>

                <div class="form-group">
                        <label>Deskripsi Barang</label>
                        <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi Barang"><?= 
                        set_value('deskripsi')?></textarea>
                </div>

                <div class="form-group">
                        <label>Harga Produk</label>
                        <input name="harga" class="form-control" placeholder="Harga Barang" value="<?= 
                        set_value('harga')?>">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                          <div class="form-group">
                              <label>Gambar</label>
                              <input type="file" name="gambar" id="preview_gambar" required />
                          </div>
                    </div>

                  <div class="col-sm-6">
                        <div class="form-group">
                        <img src="#" id="gambar_nodin" width="400" alt="Preview Gambar" />
                        </div>
                  </div>

                </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('barang') ?>" class="btn btn-success btn-sm">kembali</a>
                    </div>
                    
            <?php echo form_close() ?>
            </div>
    </div>
</div>

<script>

  function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
   }
}

$("#preview_gambar").change(function(){
   bacaGambar(this);
});

</script>