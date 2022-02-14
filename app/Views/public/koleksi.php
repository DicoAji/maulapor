<?= $this->extend('templete/templete-public'); ?>

<?= $this->section('content'); ?>

    <div class="bg-abu-abu pt100 pb100">
      <!-- isian -->
      <div class="container cari">
        <h3 class="kuning">Koleksi</h3>
        <p>
          Berikut merupakan kumpulan koleksi benda cagar budaya di Dinas
          Pendidikan dan Kebudayaan Kabupaten Batang
        </p>
        <input
          type="text"
          class="pencarian mt-2"
          id="pencarianbenda"
          placeholder="kolom pencarian"
        />
      </div>
      <!-- koleksi -->
      <div class="container koleksi pt50">
        <div class="row tengah">

        <?php  foreach ($benda as $data) : ?>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="p-2 border benda">
              <div class="tengah" >
                <img
                  src="/assets/img/benda/<?= $data['gambar']; ?>"
                  class="tengah conta"
                  alt="gambar_benda"
                  style="height: 200px;width:auto"
                />
              </div>
              
              <!-- nama -->
              <div class="tengah mt10">
                <h5 style="font-size: 15px !important;"><?= $data['nama_benda']; ?></h5>
              </div>
              <div class="tengah">
                <p style="font-size: 12px !important;" >Lokasi benda saat ini: <?= $data['lokasi_saat_ini']; ?></p>
              </div>
              <!-- detail -->
              <!-- <div class="tengah mt-2">
                <a class=" btn btn-hitam  " href="/Umum/detail">Detail</a>
              </div> -->
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>

      <!-- Sekilas Info -->
      <div class="container bg-coklat mt100 pt50 p-5">
        <div class="tengah">
          <h2 class="kuning">Sekilas Info</h2>
        </div>
        <div class="row mt50">
          <div class="col-lg-6 col-12">
            <div class="tengah">
              <img src="/assets/img/pendukung/syeilendra.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-12 pt-md-4 pt-sm-3">
            <p>
              Sebagian daerah Batang ada yang menyebut sebagai jejak Wangsa
              Syailendra yang nantinya sebagai cikal bakal peradapan Mataram
              kuno. Atau dengan kata lain Batang menjadi salah satu saksi
              sejarah keberadaan Dinasti Syailendra Jejak peninggalan sejarah
              Wangsa Syailendra masih dapat dijumpai disejumlah diwilayah Batang
              hingga sekarang,walaupun situs-situs tersebut umumnya sudah hancur
              tak berbentuk yang menyisakan sedikit batu dan arca. Sejumlah
              situs tersebar dibeberapa tempat di wilayah Batang sebagai
              indikasi atau bukti nyata peninggalan sejarah Wangsa Syailendra
              :Pertama prasasti Sojomerto abad ke-7 yang membuktikan keberadaan
              Dapunta Syailendra benar-benar ada dan nyata .Ia merupakan anak
              Santanu dan Bhadrawati Indikasi yang kedua adanya situs Pejaten
              berupa batu-batu candi,lumpang serta ganesha berada diarea
              persawahan.
            </p>
          </div>
        </div>
      </div>
    </div>
    <?= $this->endSection(); ?>