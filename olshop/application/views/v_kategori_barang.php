<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?=base_url() ?>assets/slider/slider1.jpg">
                     
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?=base_url() ?>assets/slider/slider2.jpg">
                      
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?=base_url() ?>assets/slider/slider3.jpg">
                      
                    </div>
                     <div class="carousel-item">
                      <img class="d-block w-100" src="<?=base_url() ?>assets/slider/slider4.jpg">
                       
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


<!-- Default box -->
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row d-flex align-items-stretcg">


  <?php foreach ($barang as $key => $value) { ?>
 
          <div class="col-sm-4 d-flex align-items-stretch ">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header syahrul border-bottom-0">
                <h2 class="" ><b><?= $value->nama_barang ?></b></h2>
                <p class="syahrul text-sm"><b>kategori: </b><?= $value->nama_kategori ?> </p>
             
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <!-- <div class="col-7">
                        <i class="fas fa-lg fa-dollar-sign"></i>
                        <span class="badge bg-primary">IDR.<?= number_format($value->harga, 0)?>  </span>
                        <span class="badge bg"><?= $value->deskripsi ?></span>
                    </div> -->
                    <div class="col-12 text-center">
     
                      <img src="<?= base_url('assets/gambar/gm/' . 
                            $value->gambar)?>" class="img-fluid" alt="" width="200px" hight="120px"  >
                    </div>
                  </div>
                </div>
            <div class="card-footer">
                <div class="row">
                  <div class="col-sm-6">
                      <div class="text-left">
                      <h4><span class="badge bg">IDR.<?= number_format($value->harga, 0)?></span></h4>
                      </div>

                  </div>
                  <div class="col-sm-6">
                      <div class="text-right">
                        <a href="#" class="btn btn-sm btn-success">
                          <i class="fas fa-search-dollar"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-primary">
                          <i class="fas fa-cart-plus"></i> Add
                        </a>
                      </div>
                  </div>
              </div>
            </div>
              </div>
            </div>

  <?php } ?>

</div>
    </div>
        </div>