<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Gambar Barang</h3>
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
            <table class="table table-bordered" id="example1">
                <thead class="text text-center">
                        <tr>
                        <th >No</th>
                        <th >Nama Barang</th>
                        <th >Cover</th>
                        <th >Jumlah Gambar</th>
                        <th >Action</th>
                        </tr>
                </thead>
                <tbody> 
                <?php $no = 1;
                     foreach ($gambarbarang as $key => $value) { ?>
                        <tr>
                            <td class="text text-center"><?= $no++ ?></td>
                            <td class="text text-center"><?= $value->nama_barang ?></td>
                            <td class="text text-center"><img src="<?= base_url('assets/gambar/' . 
                            $value->gambar)  ?>"></td>
                            <td class="text text-center" > <span class="badge bg-primary"><h4><?= $value->total_gambar ?></h4></td>
                            

                            <td class="text text-center">
                            <a href="<?= base_url('gambarbarang/add/' . 
                            $value->id_barang)  ?>"  class="btn btn-success btn-sm">Add Gambar
                            <i class="fas fa-edit"></i></a>
                            </td>

                            
                            

                        </tr>
                     <?php } ?>    
                </tbody>
            </table>

        </div>
             
    </div>
         
</div>