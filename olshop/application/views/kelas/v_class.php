<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Class</h3>

                <div class="card-tools">
                <a href="<?= base_url('kelas/add') ?>" type="button" class="btn btn-primary btn-sm" >
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
                        <th>ID Class</th>
                        <th>Nama Class</th> 
                        <th>Sub Kategori</th>
                        <th>Action</th>
                        </tr>
                </thead>
                <tbody>        
                    <?php $no = 1;
                     foreach ($kelas as $key => $value) { ?>
                        <tr>
                            <td class="text text-center"><?= $no++ ?></td>
                            <td class="text text-center"><?= $value->nama_class ?></td>
                            <td class="text text-center"><?= $value->nama_subkategori ?></td>
                            
                            
                            <td class="text text-center">
                            <button class="btn btn-warning btn-sm" data-toggle="modal" 
                            data-target="#edit<?= $value->id_subkategori ?>" >
                            <i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" 
                            data-target="#delete<?= $value->id_subkategori ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                     <?php } ?>
                </tbody>
            </table>


        </div>
              
    </div>
           
</div>


<!-- <div class="modal fade" id="add">
        <div class="modal-dialog modal-xm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Subkategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <?php
              echo form_open('sub_kategori/add'); 
              ?>

                <div class="form-group">
                    <label>Nama Subkategori</label>
                    <input type="text" name="nama_subkategori" class="form-control"  placeholder="Nama subkategori" required>
                </div>

                <div class="form-group">
                    <label>Sub Kategori</label>
                    <select name="id_subkategori" class="form-control"> 
                       <option value="">--Pilih Sub Kategori--</option>
                       <?php foreach ($sub_kategori as $key => $value) {?>
                           <option value="<?= $value->id_subkategori ?>">
                           <?= $value->nama_subkategori ?></option>
                           <?php }?>
                       </select>
                </div>

               

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php 
              echo form_close(); 
            ?>

        </div>
          
    </div>
        
</div> -->


<!-- <?php foreach ($sub_kategori as $key => $value) { ?>
 <div class="modal fade" id="edit<?= $value->id_subkategori ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Subkategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
              <?php
              echo form_open('sub_kategori/edit/' .  $value->id_subkategori ); 
              ?>

                <div class="form-group">
                    <label>Nama Subkategori</label>
                    <input type="text" name="nama_subkategori" value="<?= $value->nama_subkategori ?>" class="form-control"  placeholder="Nama subKategori" required>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <label>Sub Kategori</label>
                    <select name="id_subkategori" class="form-control"> 
                       <option value="">--Pilih Sub Kategori--</option>
                       <?php foreach ($sub_kategori as $key => $value) {?>
                           <option value="<?= $value->id_subkategori ?>">
                           <?= $value->nama_subkategori ?></option>
                           <?php }?>
                       </select>
                </div>

                

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php 
              echo form_close(); 
            ?>

        </div>
       
    </div>
       
</div>
 <?php } ?> -->

 
 <?php foreach ($kelas as $key => $value) { ?>
 <div class="modal fade" id="delete<?= $value->id_class ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $value->nama_class ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h6>Apakah anda yakin ingin Menghapus Data ini....?</h6>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('kelas/delete/' . $value->id_class) ?>" class="btn btn-primary">Delete</a>
            </div>

        </div>
       
    </div>
       
</div>
 <?php } ?>
 