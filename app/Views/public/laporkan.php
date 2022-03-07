<?= $this->extend('templete/templete-public'); ?>

<?= $this->section('content'); ?>
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
    <!-- end navbar -->

    <!-- bg abu laporkan -->
    <div class="isianlaporkan">
      <div class="container">
        <div class="row pt100 pb100">
          <div class="col-lg-6 col-12 laporanheader">
            <h3 class="kuning">Laporkan</h3>
            <p>
              “ Ingat Jangan Asal Lapor” Sebelum anda melaporkan pastikan benda
              yang anda temui sesuatu yang berkaitan dengan benda cagar budaya.
            </p>
            <h2>jadilah masyarakat yang bijak</h2>
            <div class="gambarcari"></div>
          </div>
          <div class="col-lg-6 col-12 p-3">



            <!-- formlaporan -->
            <form
              class="needs-validation"
              action="/Umum/tambahlaporan"
              name="laporan"
              method="POST"
              novalidate
              enctype="multipart/form-data"
              id="public-form-laporan"
            >
            <?= csrf_field(); ?>
              <div class="nama position-relative">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required />
                <div class="invalid-feedback">Nama tidak boleh kosong</div>
              </div>
              <div class="nik position-relative">
                <label for="nik">NIK (Nomor Induk Kepedudukan)</label>
                <input type="number" name="nik" id="nik" required />
                <div class="invalid-feedback">
                  NIK berupa nomor dan tidak boleh kosong
                </div>
              </div>
              <div class="alamat position-relative">
                <label for="alamat">Alamat rumah</label>
                <textarea name="alamat" id="alamat" required></textarea>
                <div class="invalid-feedback">
                  Alamat rumah tidak boleh kosong
                </div>
              </div>
              <div class="lokasi position-relative">
                <label for="lokasi">Lokasi penemuan</label>
                <textarea name="lokasi" id="lokasi" required></textarea>
                <div class="invalid-feedback">
                  Lokasi penemuan tidak boleh kosong
                </div>
              </div>
              <div class="tanggal position-relative">
                <label for="tanggal">Tanggal penemuan</label>
                <input
                  type="date"
                  style="cursor: pointer"
                  id="tanggal"
                  required
                  name="tanggal"
                />
                <div class="invalid-feedback">
                  Tanggal penemuan tidak boleh kosong
                </div>
              </div>
              <div class="nomor position-relative">
                <label for="nomor">Nomor yang bisa dihubungi </label>
                <input type="number" name="nomor" id="nomor" required />
                <div class="invalid-feedback">
                  Nomor hubung tidak boleh kosong
                </div>
              </div>
              <div class="status position-relative d-none">
                <label for="status">Status </label>
              </div>
              <div class="form-input py-4 position-relative">
                <label for="">Masukkan gambar</label>
                <div class="preview mb-3">
                  <img id="file-ip-1-preview" />
                </div>
                
                <label class="btn btn-transparant rounded" for="file-ip-1"
                  >Upload foto benda</label
                >
               
                <div class="prev">
                  <input
                    required
                    class="d-none"
                    type="file"
                    id="file-ip-1"
                    accept="image/*"
                    onchange="showPreview(event);"
                    name="gambar"
                  />
                  <div class="invalid-feedback ">Silahkan masukkan gambar</div>
                </div>
              </div>

              <!-- submit -->
              <div class="submit">
                <button
                  type="submit"
                  class="btn btn-transparant justify-content-center d-flex w-100"
                >
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?= $this->endSection(); ?>