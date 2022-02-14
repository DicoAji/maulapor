<?= $this->extend('templete/templete-admin'); ?>

<?= $this->section('content'); ?>
        <!-- Page content-->
        <div class="container pt50">
          <h2 class="kuning">laporan masyarakat</h2>
          <input type="text" placeholder="kolom pencarian" id="carilaporan" />
          <!-- tabel koleksi -->
          <div class="card-body">
            <div class="table-responsive tablelaporan">
              <table id="table" class="display table table-hover">
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
                    <td><?= $data['tanggal_penemuan']; ?></td>
                    <td><?= $data['nomor_hubung']; ?></td>
                    <td  id="status"><?= $data['status']; ?></td>
                    
                    <td>
                      <a href="/Admin/ubahlaporan/<?= $data['id_laporan']?>">
                        <i class="fas fa-edit" style="cursor: pointer"></i>
                      </a>
                      <a href="/Admin/hapuslaporan/<?= $data['id_laporan']; ?>">
                      <i style="color: red;" class="fa-solid fa-trash-can"></i>
                      </a>
                      <!-- <a href="/Admin/ubahlaporan/?= $data['id']?>">
                        <i class="fas fa-edit" style="cursor: pointer"></i>
                      </a> -->
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
    <!-- <script>
      // var value = document.getElementById('status').value;
      // var status = document.getElementById('status');

      // if (value == "belum"){
      //   status.style.color = 'green';
      // }  else{
      //   status.style.color = 'yellow';
      // }
    </script> -->
    
    <?= $this->endSection(); ?>
