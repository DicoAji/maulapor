<?= $this->extend('templete/templete-admin'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container pt50">
          <h2 class="kuning">Koleksi benda</h2>
          <input type="text" placeholder="kolom pencarian" id="caribenda" />
          <!-- tabel koleksi -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="table" class="display table table-hover">
                <thead class="">
                  <tr class="bg-kuning">
                    <th>Nama Benda</th>
                    <th>Jenis Benda</th>
                    <th>Juru Pemelihara</th>
                    <!-- <th>Lokasi Penemuan</th> -->
                    <th>Lokasi saat ini</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="mt-2">
                  
                <?php  foreach ($benda as $data) : ?>
                  <tr class="data">
                    <td><?= $data['nama_benda']; ?></td>
                    <td><?= $data['jenis_benda']; ?></td>
                    <td><?= $data['juru_pemelihara']; ?></td>
                    <!-- <td>?= $data['lokasi_penemuan']; ?></td> -->
                    <td><?= $data['lokasi_saat_ini']; ?></td>
                    <td>
                      <!-- <a href="/Admin/delete/?= $data['id']?>" onclick="ConfirmDelete()" class="red">hapus</a>
                      <a href="/Admin/ubahdata/?= $data['id']?>" class="ungu">ubah</a> -->
                      <a href="/Admin/delete/<?= $data['id_benda']?>" onclick="ConfirmDelete()" class="red">hapus</a>
                      <a href="/Admin/ubahdata/<?= $data['id_benda']?>" class="ungu">ubah</a>
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