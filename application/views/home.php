<?=$this->session->flashdata('pesan');?>
<main role="main">
  <div class="container-fluid">
    <!-- Set up your HTML -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" height="600px" src="<?=base_url('assets/img/carousel/img1.jpeg');?>" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="mt-5 text-selamat text-dark">Selamat Datang di Halaman PPDB <?=$site['nama_sekolah'];?></h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="600px" src="<?=base_url('assets/img/carousel/img2.jpeg');?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="600px" src="<?=base_url('assets/img/carousel/img3.jpeg');?>" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="container mt-5">
    <p><?=$site['keterangan'];?></p>
    <p><a class="btn btn-primary btn-lg" href="<?=site_url('daftar');?>" role="button">Daftar &raquo;</a></p>
  </div>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-sq-lg btn-primary">
              <i class="fa fa-user fa-5x"></i><br/>
              Demo Primary <br>Button
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-sq-lg btn-success">
            <i class="fa fa-user fa-5x"></i><br/>
            Demo Success <br>Button
          </a>
        </div>
      </div>

      <hr>

    </div> <!-- /container -->
  </div>

</main>

<section id="services">
  <div class="row">
    <div class="col-md-3">
      <a href="http://sekolah.dexter-pratama.web.id/home/pengumuman" class="menu-ico">
        <div class="col-lg-15 col-md-6 text-center services border-right">
          <div class="service-box">
            <h3>Pengumuman</h3>
            <div class="ico info">
              <i class="fa fa-4x fa-bullhorn wow bounceIn" data-wow-delay=".1s"></i>
            </div>
            <p>Temukan pengumuman terbaru dari SMP IT Bengkulu.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="http://sekolah.dexter-pratama.web.id/home/galeri" class="menu-ico">
        <div class="col-lg-15 col-md-6 text-center services border-right">
          <div class="service-box">
            <h3>Galeri</h3>
            <div class="ico warning">
              <i class="fa fa-4x fa-camera wow bounceIn" data-wow-delay=".2s"></i>
            </div>
            <p>Galeri kegiatan Siswa, Hasil Editing Siswa, Profile Sekolah, Pramuka, Ekstra Dll disini.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="http://sekolah.dexter-pratama.web.id/home/dokumen" class="menu-ico">
        <div class="col-lg-15 col-md-6 text-center services border-right">
          <div class="service-box">
            <h3>Dokumen</h3>
            <div class="ico primary">
                <i class="fa fa-4x fa-file wow bounceIn"></i>
            </div>
            <p>Temukan berita terbaru dari SMP IT Bengkulu.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="http://sekolah.dexter-pratama.web.id/calon_siswa/ppdb" class="menu-ico">
        <div class="col-lg-15 col-md-6 text-center services">
          <div class="service-box">
            <h3>PPDB</h3>
            <div class="ico danger">
              <i class="fa fa-4x fa-book wow bounceIn" data-wow-delay=".3s"></i>
            </div>
            <p>Penerimaan Peserta Didik Baru.</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>