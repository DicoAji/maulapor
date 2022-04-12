
<?= $this->extend('templete/templete-public'); ?>

<?= $this->section('content'); ?>

    <!-- isi -->
    <div class="bg-abu-abu">
      <div class="beranda">
        <div class="container pb100 pt50">
          <div class="row">
            <div class="col-lg-6 col-12">
              <p class="mt50">Hallo warga Kabupaten Batang</p>
              <h1 class="mt20">
                SELAMAT DATANG DI <br />
                MAULAPOR
              </h1>
              <a href="/Umum/laporkan" class="btn btn-transparant mt20" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Laporkan penemuan benda
              </a>
              
            </div>
            <div class="col-lg-6 col-12">
              <div class="prasasti mt-lg-5 mt-md-5"></div>
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
            <div class="borobudur"></div>
          </div>
          <div class="col-lg-6 col-12">
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
            
          </div>
        </div>
      </div>
    </div>
   
    <?= $this->endSection(); ?>
