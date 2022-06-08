<?= $this->extend('templete/templete-admin2'); ?>

<?= $this->section('content'); ?>
    <!-- Page content-->
    <div class="container bg-light p-4 br25">
      <h2 class="kuning mt25">Koleksi Benda</h2>
      <input class="mt20" type="text" placeholder="kolom pencarian" id="caribenda" />
      <div class="mt25">
        <a href="<?php base_url() ?>/Admin/tambah" class="btn btn-transparant  "> Tambah Data Benda</a>
        <a class="btn btn-transparant downloadkoleksi ms-lg-3 ms-0 " href="<?php base_url() ?>/Admin/downloadKoleksiSorting">Download koleksi</a>
      </div>
      <!-- tabel koleksi -->
      <div class="card-body mt25">
        <div class="table-responsive tabel">
          <table id="table" class="display table table-hover">
            <thead class="">
              <tr class="bg-kuning"  >
                <th>Nama Benda</th>
                <!-- <th>Jenis Benda</th> -->
                <th>Pendata</th>
                <th>Waktu Pendataan</th>
                <th>Lokasi </th>
                <th>Keterangan </th>
                <th>Tanggal ditemukan </th>
                <th>Kegunaan</th>
                <th>Koordinat </th>
                <th>Jupel</th>
                <th>Sejarah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="mt-2">
            <?php  foreach ($benda as $data) : ?>
              <?php  $date = date_create($data['waktu_pendataan']);
                $tgl = date_format($date,'d/m/Y');
                $jam = date_format($date,'H:i:s'); ?> 
              <tr class="data">
                <td><?= $data['nama_benda']; ?></td>
                <td><?= $data['pendata']; ?></td>
                <td><?= $tgl?>. Pukul: <?= $jam; ?> WIB</td>
                <td><?= $data['lokasi_saat_ini']; ?></td>
                <td><?= $data['keterangan']; ?></td>
                <td id="tgl_ditemukan"> 
                  <?= $data['tanggal_ditemukan']; ?>                
                    <!-- ?= date( strtotime($data['tanggal_ditemukan'],'d-m-Y') ); ?>  -->
                </td>
                <td><?= $data['kegunaan']; ?></td>
                <td><?= $data['koordinat']; ?></td>
                <td><?= $data['juru_pemelihara']; ?></td>
                <td><?= $data['sejarah']; ?></td>
                <td>
                  <a class="btn btn-danger" href="<?php base_url() ?>/Admin/delete/<?= $data['id_benda']?>" onclick="return confirm('Apakah anda yakin untuk menghapus data <?= $data['nama_benda']; ?>?');" >hapus</a>
                  <a class="btn btn-info mt-2" href="<?php base_url() ?>/Admin/ubahdata/<?= $data['id_benda']?>" class="ungu">ubah</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
      
    <?= $this->endSection(); ?>