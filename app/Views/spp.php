<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">SPP</h5>
 
      <a href="<?= base_url('/home/tambah_spp/') ?>"><button class="btn " title="Tambah"><i class="mdi mdi-plus"></i></button></a>
      <div class="table-responsive">
      <table class="table" id="table">

         <thead class="thead-purple">
            <tr>
              <th>No</th>
              <th>Kode SPP</th>
              <th>Bulan</th>
              <th>Nama</th>
              <th>Biaya</th>
              <th>Denda</th>
              <th>Tanggal Bayar</th>
              <th>Waktu Pembayaran</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($gas as $dona) { ?>
              <tr>
                <td><?= $no++  ?></td>
                <td><?= $dona->kode_spp?></td>
                <td><?= $dona->bulan?></td>
                <td><?= $dona->nama_siswa?></td>
                <td><?= $dona->biaya?></td>
                <td><?= $dona->denda?></td>
                <td><?= $dona->tanggal_bayar?></td>
                <td><?= $dona->waktu?></td>
                <td >
                <!-- <a href="<?= base_url('/home/edit_spp/'. $dona->id_spp) ?>"><button class="btn " title="Edit"><i class="mdi mdi-border-color"></i></button></a> -->

                  <a href="<?= base_url('/home/hapus_spp/'. $dona->id_spp) ?>"><button class="btn " title="Delete"><i class="mdi mdi-minus-circle-outline "></i></button></a>
                </td>
              </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
