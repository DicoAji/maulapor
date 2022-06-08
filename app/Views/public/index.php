
<?= $this->extend('templete/templete-public'); ?>
<?= $this->section('content'); ?>
    <!-- isi -->
    <div class="bg-abu-abu">
      <div class="beranda">
        <div class="container pb100 pt50">
          <div class="row">
            <div class="col-lg-6 col-12">
              <p class="mt50">Hallo warga Kabupaten Batang</p>
              <h1 class="mt20 slide-right">
                SELAMAT DATANG  <br />
                DI MAULAPOR
              </h1>
              <a href="<?php base_url() ?>/Umum/laporkan" class="btn btn-transparant mt20" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Laporkan penemuan benda
              </a>
            </div>
            <div class="col-lg-6 col-12">
              <marquee behavior=""   direction="">
                <div style="position:inherit ;" class="prasasti mt-lg-5 mt-md-5" ></div>
              </marquee>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- sekilas info -->
    <div class="bg-hitam p-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="borobudur slide-right"></div>
          </div>
          <div class="col-lg-6 col-12 slide-left">
            <h2 class="kuning mt20">SEKILAS INFO</h2>
            <p class="kuning mt20">
              Benda cagar budaya merupakan benda alam dan atau benda buatan
              manusia yang dimanfaatkan oleh manusia, serta sisa-sisa biota yang
              dapat dihubungkan dengan kegiatan manusia dan/atau dapat
              dihubungkan dengan <strong>SEJARAH MANUSIA</strong> . Benda cagar budaya dapat
              bersifat bergerak atau tidak bergerak dan merupakan kesatuan atau
              kelompok
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- tentang -->
    <div id="tentang" class="tentang bg-abu-abu pt100 pb100">

      <div class="container">
        
        <div class="mt50">
          <div class="row ">
            <div class=" col-lg-6 col-12 tengah flex-column">
             <div class="mapouter tengah">
               <div class="gmap_canvas">
                 <iframe width="354" height="219" id="gmap_canvas" src="https://maps.google.com/maps?q=Jalan%20Slamet%20Riyadi%20No.%2029%20Batang&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                 </iframe>
                 <a href="https://123movies-to.org"></a>
                 <br>
                 <style>.mapouter{height:auto;width:100%;}</style>
                 <a href="https://www.embedgooglemap.net"></a>
                 <style>.gmap_canvas {overflow:hidden;background:none!important;height:auto;width:100%;}</style>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-12 card_tentang slide-left">
              <h2 class="tentang_head" style="color:darkgray;" >TENTANG</h2>
              <p class="mt2">
                Mau Lapor adalah sebuah sistem informasi laporan untuk masyarakat
                terkait penemuan benda cagar budaya. Dengan adanya sistem ini
                diharapkan dapat mempermudah pengelolaan data benda cagar budaya di
                Dinas Pendidikan dan Kebudayaan Kabupaten Batang. Masyarakat tidak
                perlu bingung untuk melaporkan andai waktu mau melaporkan penemuan
                benda diduga benda cagar budaya. Sistem ini juga menampilkan semua data
                benda cagar budaya yang ada di Dinas Pendidikan dan Kebudayaan
                Kabupaten Batang.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="container">
        <h2 class="kuning tengah">TENTANG</h2>
        <p class="tengah mt50 text-center">
          Mau Lapor adalah sebuah sistem informasi laporan untuk masyarakat
          terkait penemuan benda cagar budaya. Dengan adanya sistem ini
          diharapkan dapat mempermudah pengelolaan data benda cagar budaya di
          Dinas Pendidikan dan Kebudayaan Kabupaten Batang. Masyarakat tidak
          perlu bingung untuk melaporkan andai waktu mau melaporkan penemuan
          benda diduga benda cagar budaya. Sistem ini juga menampilkan semua data
          benda cagar budaya yang ada di Dinas Pendidikan dan Kebudayaan
          Kabupaten Batang.
        </p>
        <div class="tengah mt20 kuning">
          Sistem Informasi ini disusun dengan menggunakan tools sebagai berikut:
        </div>
        <div class="tools mt50">
          <div class="row mt50 tengah">
            <div class="col-lg-1 col-md-3 col-sm-6 html alat " data-bs-toggle="tooltip" data-bs-placement="top" title="html"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 css alat" data-bs-toggle="tooltip" data-bs-placement="top" title="css"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 bootstrap alat" data-bs-toggle="tooltip" data-bs-placement="top" title="bootstrap"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 php alat" data-bs-toggle="tooltip" data-bs-placement="top" title="php"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 ci alat" data-bs-toggle="tooltip" data-bs-placement="top" title="codeigniter"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 js alat" data-bs-toggle="tooltip" data-bs-placement="top" title="javascript"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 mysql alat" data-bs-toggle="tooltip" data-bs-placement="top" title="mysql"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 figma alat" data-bs-toggle="tooltip" data-bs-placement="top" title="figma"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 jQuery alat" data-bs-toggle="tooltip" data-bs-placement="top" title="jQuery"></div>
            <div class="col-lg-1 col-md-3 col-sm-6 fontA alat" data-bs-toggle="tooltip" data-bs-placement="top" title="Font awesome "></div>
          </div>
        </div>
      </div> -->
    </div>
   
    <?= $this->endSection(); ?>
