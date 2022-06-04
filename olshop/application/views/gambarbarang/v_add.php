<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Gambar Barang : <?= $barang->nama_barang ?> </h3>
              </div>
             
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
            
            echo form_open_multipart('') ?>

                <div class="form-group">
                        <label>Nama Produk</label>
                        <input name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?= 
                        set_value('nama_barang')?>">
                </div>
           

           <?php echo form_close() ?>

        </div>
             
    </div>
         
</div>