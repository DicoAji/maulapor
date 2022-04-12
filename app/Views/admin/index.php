<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container ">
          <h2 class="kuning">Koleksi benda</h2>
          <input type="text" placeholder="kolom pencarian" id="caribenda" />
          <div class="mt25">
            <a href="<?php base_url() ?>/Admin/tambah" class="btn btn-hitam  "> Tambah Data Benda</a>

          </div>
          <!-- tabel koleksi -->
          <div class="card-body">
            <div class="table-responsive tabel">
              <table id="table" class="display table table-hover">
                <thead class="">
                  <tr class="bg-kuning">
                    <th>Nama Benda</th>
                    <th>Jenis Benda</th>
                    <th>Juru Pemelihara</th>
                    <th>Lokasi </th>
                    <th>Keterangan </th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="mt-2">
                <?php  foreach ($benda as $data) : ?>
                  <tr class="data">
                    <td><?= $data['nama_benda']; ?></td>
                    <td><?= $data['jenis_benda']; ?></td>
                    <td><?= $data['juru_pemelihara']; ?></td>
                    <td><?= $data['lokasi_saat_ini']; ?></td>
                    <td><?= $data['keterangan']; ?></td>

                    <td>
                      <a class="btn btn-danger" href="/Admin/delete/<?= $data['id_benda']?>" onclick="return confirm('Apakah anda yakin untuk menghapus data <?= $data['nama_benda']; ?>?');" >hapus</a>
                      <a class="btn btn-info" href="/Admin/ubahdata/<?= $data['id_benda']?>" class="ungu">ubah</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
      

    <?= $this->endSection(); ?>