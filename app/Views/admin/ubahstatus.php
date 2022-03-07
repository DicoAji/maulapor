<?= $this->extend('templete/templete-admin'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container ubahstatus p-4">
          <h2 class="kuning text-center">Ubah status laporan</h2>
          <form action="/Admin/updatestatus/<?=$laporan['id_laporan']; ?>" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>
            <div class="ketegori mt50 ">
              <div class="tengah mb-4">
                <label>Update status laporan nama pelapor <?= $laporan['nama_pelapor']; ?> </label>
              </div>
              <div class="tengah mt-4">
              <div class="gambar">
                  <img src="/assets/img/gambarlaporan/<?= $laporan['gambar']; ?>" alt="">

                </div>
              </div>
              <p class="tengah"></p>

              <div class="statuslaporan mt-4 tengah ">
                <div class="belum">
                  <input type="radio" value="belum"  class="btn-check" name="status" id="option1" autocomplete="off" checked>
                  <label class="btn btn-danger" for="option1">Belum diperiksa</label>
                </div>
                <div class="proses ms-3 me-3">
                  <input type="radio" value="proses" class="btn-check" name="status" id="option2" autocomplete="off">
                  <label class="btn btn-warning" for="option2">Proses pemeriksaan</label>
                </div>
                <div class="sucess">
                  <input type="radio" value="selesai" class="btn-check" name="status" id="option4" autocomplete="off">
                  <label class="btn btn-success" for="option4">Selesai pemeriksaan </label>
                </div>
              </div>
            </div>


            <!-- submit -->
            <div class=" tengah mt50">
              <button  class=" w-100 btn btn-transparant">Submit</button>
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
