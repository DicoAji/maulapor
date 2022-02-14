<?= $this->extend('templete/templete-admin'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container pt50 pb50">
          <h2 class="kuning tengah">Tambah data</h2>
          <p class="text-center">Upload gambar dengan resolusi 170x200</p>
          


          <form action="/Admin/tambahbenda" method="POST" class="needs-validation"  enctype="multipart/form-data" novalidate>
          <?= csrf_field(); ?>
           
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="gambar tengah">
                  <div class="form-input">
                    <div class="preview">
                      <img
                        id="file-ip-1-preview"
                        src="/assets/img/uploadgambar/uploadgambar.jpg"
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
              <div class="col-lg-6 col-12">
                <div class="namabenda mt-5">
                  <label for="namabenda">Nama Benda :</label>
                  <input
                    required
                    class="w-100 ps-3 p-2 mt-2"
                    id="namabenda"
                    type="text"
                    name="namabenda"
                  />
                  <div class="invalid-feedback">Nama Benda tidak boleh kosong</div>
                  
                </div>
                <div class="jenis mt-4">
                  <label for="jenisbenda">Jenis Benda :</label>

                  <select class="form-select mt-2" id="jenisbenda" name="jenisbenda">
                    <option selected>Choose...</option>
                    <?php foreach ($jenisbenda as $jenisbenda) :?>

                    <option value="<?= $jenisbenda['id_jenis_benda']; ?>"><?= $jenisbenda['jenis_benda']; ?></option>
                    <!-- <option value="Keris">Keris</option>
                    <option value="Benda">Benda</option>
                    <option value="Bangunan">Bangunan</option>
                    <option value="Makam">Makam</option>
                    <option value="Situs">Situs</option>
                    <option value="Kawasan">Kawasan</option> -->
                    <?php endforeach ?>
                  </select>


                  <!-- <input
                    required
                    class="w-100 ps-3 p-2 mt-2"
                    id="jenisbenda"
                    type="text"
                    name="jenisbenda"
                  /> -->
                  <div class="invalid-feedback">Jenis benda tidak boleh kosong</div>
                  
                </div>
                

                <div class="Lokasi mt-4">
                  <label for="lokasisaatini">Lokasi saat ini:</label>
                  <textarea
                    required
                    name="lokasisaatini"
                    id="lokasisaatini"
                    class="w-100"
                  ></textarea>
                  <div class="invalid-feedback">Lokasi tidak boleh kosong</div>
                </div>
                <div class="Lokasi mt-4">
                  <label for="jupel">Juru Pemelihara:</label>
                  <textarea
                    required
                    name="jupel"
                    id="jupel"
                    class="w-100"
                  ></textarea>
                  
                </div>
               
                <div class="submite mt-4 justify-content-end d-flex">
                  <button type="submit" class="btn btn-hitam w-100 tengah">
                    Tambah
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <?= $this->endSection(); ?>
