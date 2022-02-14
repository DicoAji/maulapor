<?= $this->extend('templete/templete-admin'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container ubahstatus p-4">
          <h2 class="kuning text-center">Ubah status laporan</h2>
          <form action="/Admin/updatestatus/<?=$laporan['id_laporan']; ?>" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>

            <!-- <div class="pelapor">
              <label for="pelapor">Nama Pelapor</label>
              <input type="text" name="pelapor" value="?= $laporan['nama_pelapor']; ?>" required />
            </div> -->
            <!--
            <div class="nik">
              <label for="nik">NIK</label>
              <input type="number" name="nik" value="?= $laporan['nik']; ?>"  required />
            </div> -->
            <!-- <div class="alamat">
              <label for="alamat">Alamat Pelapor</label>
              <input type="text" name="alamat" value="?= $laporan['alamat_pelapor']; ?>" id="alamat" required></input>
            </div> -->
            <!-- <div class="lokasipenemuan">
              <label for="lokasipenemuan">Lokasi Penemuan</label>
              <input type="text" name="lokasipenemuan" value="?= $laporan['lokasi_penemuan']; ?>" id="lokasipenemuan" required></input>
            </div> -->
            <!-- <div class="tanggalpenemuan">
              <label for="tanggalpenemuan">Tanggal Penemuan</label>
              <input type="date" value="?= $laporan['tanggal_penemuan']; ?>" name="tanggalpenemuan" required />
            </div> -->
            <!-- <div class="nomor">
              <label for="nomor">Nomor Hubung</label>
              <input type="number" value="?= $laporan['nomor_hubung']; ?>" name="nomorhubung" required />
            </div> -->


            <div class="ketegori mt50 ">
              <div class="tengah">
                <p>Update status laporan nama pelapor <?= $laporan['nama_pelapor']; ?> </p>
              </div>
              <p class="tengah"></p>
              <!-- <label
                for="updateStatus"
                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"
                >Update Kategori
              </label> -->

  

              <div class="radio-toolbar tengah pilihan mt20">
                <input
                  type="radio"
                  id="belum"
                  name="status"
                  value="belum"
                  
                />
                <label for="belum" style="cursor: pointer; ">Belum diperiksa</label>

                <input
                  type="radio"
                  id="proses"
                  name="status"
                  value="proses"
                  
                />
                <label for="proses" style="cursor: pointer; ">Pemeriksaan </label>

                <input
                  type="radio"
                  id="selesai"
                  name="status"
                  value="selesai"
                  
                />
                <label for="selesai" style="cursor: pointer;">Selesai</label>
              </div>
            </div>

            <!-- submit -->
            <div class=" tengah mt50">
              <button style="width: 200px;" class=" btn btn-transparant">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>


<?= $this->endSection(); ?>
