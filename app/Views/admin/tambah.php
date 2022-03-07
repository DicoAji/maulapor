<?= $this->extend('templete/templete-admin'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container pt50 pb50">
          <h2 class="kuning tengah">Tambah data</h2>
          <p class="text-center">Upload gambar dengan resolusi 170x200</p>
          <div class="d-flex justify-content-end">
            <a href="" class="btn btn-transparant" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Kategori Benda</a>
          </div>
          <form action="/Admin/tambahbenda" method="POST" class="needs-validation"  id="admin-form-tambah" enctype="multipart/form-data" novalidate>
          <?= csrf_field(); ?>
            <div class="row mt-4">
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
                    <label for="file-ip-1" class="mt10 tengah">
                      <div class="btn btn-transparant">upload</div>
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
                    <option selected>Pilih jenis benda</option>
                    <?php foreach ($jenisbenda as $jenisbenda) :?>
                      <option value="<?= $jenisbenda['id_jenis_benda']; ?>"><?= $jenisbenda['jenis_benda']; ?></option>
                    <?php endforeach ?>
                  </select>
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

          

          <!-- Modal tambah kategori-->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori Benda</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="/Admin/tambahkategori">
                  <input type="text" placeholder="tambah kategori" name="jenisbenda">
                  <div class="mt10">
                    <button type="submit" class="btn btn-hitam">Tambah</button>
                  </div>
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?= $this->endSection(); ?>
