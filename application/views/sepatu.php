<div class="container_fluid">

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://64.media.tumblr.com/f6be539d673c2a92bd63e25ce239a62e/57591cec1f38bbca-7c/s1280x1920/22682f25feb433f08702f27a9544f69b00c7b410.jpg"class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
             <img src="https://cdn.discordapp.com/attachments/562713442205564969/985494824234922015/unknown.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </a>
      </div>


  <div class="row text-center mt-3">

      <?php foreach ($sepatu as $brg) : ?>

          <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
              <small><?php echo $brg->keterangan ?></small><br>
              <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></span>
              <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
              <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>
            </div>
          </div>

      <?php endforeach; ?>
  </div>
</div>