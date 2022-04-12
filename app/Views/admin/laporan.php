<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container ">
          <h2 class="kuning">laporan masyarakat</h2>
          <input type="text" placeholder="kolom pencarian" id="carilaporan" />
          <!-- tabel koleksi -->
          <div class="card-body">
            <div class="table-responsive tabel">
              <table id="table" class="display table ">
                <thead class="">
                  <tr class="bg-kuning">
                    
                    <th>Pelapor</th>
                    <th>NIK</th>
                    <th>Alamat pelapor</th>
                    <th>Lokasi penemuan</th>
                    <th>Tanggal penemuan</th>
                    <th>Nomor hubung</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="mt-2">
                <?php  foreach ($laporan as $data) : ?>
                  <tr class="data">
                    <td><?= $data['nama_pelapor']; ?></td>
                    <td><?= $data['nik']; ?></td>
                    <td><?= $data['alamat_pelapor']; ?></td>
                    <td><?= $data['lokasi_penemuan']; ?></td>
                    <td> <?= $formattanggal = date('d-m-Y', strtotime($data['tanggal_penemuan']));; ?></td>
                    <td><?= $data['nomor_hubung']; ?></td>
                    <td class="tengah bold <?= ($data['status']) =='belum' ? 'red':  (($data['status']) =='proses' ? 'yellow' : 'green') ?> " id="status"> <?= $data['status']; ?></td>
                    <td class="text-center">
                      <a href="/Admin/ubahlaporan/<?= $data['id_laporan']?>">
                        <i class="fas fa-edit " data-bs-toggle="tooltip" data-bs-placement="top" title="ubah status laporan" style="cursor: pointer"></i>
                      </a>
                      <a href="/Admin/hapuslaporan/<?= $data['id_laporan']; ?>" onclick="return confirm('Apakah anda yakin untuk menghapus data?');">
                        <i style="color: red;" data-bs-toggle="tooltip" data-bs-placement="top" title="hapus laporan" class="fa-solid fa-trash-can"></i>
                      </a>
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
