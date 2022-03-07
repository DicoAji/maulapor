<?= $this->extend('templete/templete-admin'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container pt50 pb50">
          <h2 class="kuning tengah">ubah data</h2>
          <p class="text-center">Upload gambar dengan resolusi 170x200</p>
          
          <form action="/Admin/update/<?=$benda['id_benda']; ?>" method="POST"  enctype="multipart/form-data">
          <?= csrf_field(); ?>


          <input type="hidden" class="d-none" value="<?= $benda['gambar']; ?>" name="gambarlama">
          
            <div class="row mt-4">
              <div class="col-lg-6 col-12 pt50">
                <div class="gambar tengah">
                  <div class="form-input">
                    <div class="preview">
                      <img
                        id="file-ip-1-preview"
                        src="/assets/img/benda/<?= $benda['gambar']; ?>"
                        style="width: 100%; height:auto"
                      />
                    </div>
                    <div class="prev">
                      <input
                      class="d-none"
                        type="file"
                        id="file-ip-1"
                        accept="image/*"
                        onchange="showPreview(event);"
                        name="gambar"
                      />
                      <div class="invalid-feedback text-center">Silahkan masukkan gambar</div>
                    </div>
                    <label for="file-ip-1" class="mt20 tengah">
                      <div class="btn btn-hitam">upload</div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12" style="border-left: 2px solid var(--hitam); ">
                <div class="namabenda mt-5">
                  <label for="namabenda">Nama Benda :</label>
                  <input
                    required
                    class="w-100 ps-3 p-2 mt-2"
                    id="namabenda"
                    type="text"
                    name="namabenda"
                    value="<?= $benda['nama_benda'] ?>"
                  />
                </div>
                
                <div class="Lokasi mt-4">
                  <label for="lokasisaatini">Lokasi saat ini (penyimpanan) :</label>
                  <input type="text" required id="lokasisaatini" class="w-100" name="lokasisaatini" value="<?= $benda['lokasi_saat_ini'] ?>">
                </div>
                <div class="jenis mt-4">
                  <label for="jenisbenda">Jenis Benda :</label>

                  <select class="form-select mt-2" id="jenisbenda" name="jenisbenda">
                    <option selected value="<?= $benda['jenis_benda']; ?>"  > <?=  $benda['jenis_benda']; ?></option>
                    
                    <?php foreach ($jenisbenda as $jenisbenda) :?>
                    <option value="<?= $jenisbenda['id_jenis_benda']; ?>">  <?= $jenisbenda['jenis_benda']; ?></option>
                    <?php endforeach ?>
                  </select>
                  <div class="invalid-feedback">Jenis benda tidak boleh kosong</div>
                </div>
                
                <div class="Lokasi mt-4">
                  <label for="jupel">Juru pemelihara</label>
                  <input type="text" required id="jupel" class="w-100" name="jupel" value="<?= $benda['juru_pemelihara'] ?>">
                </div>
                <div class="submite mt-4 justify-content-end d-flex">
                  <button type="submit" class="btn btn-hitam w-100 tengah">
                    Kirim
                  </button>
                </div>
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- script preview gambar -->
    <script>
      function showPreview(event) {
        if (event.target.files.length > 0) {
          var src = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("file-ip-1-preview");
          preview.src = src;
          preview.style.display = "block";
          preview.style.height = "100%";
          preview.style.width = "100%";
        }
      }
    </script>
  </body>
</html>


<?= $this->endSection(); ?>