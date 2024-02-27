<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">T A R I F</h4>
      <a href="<?= base_url('/home/tambah_tarif/') ?>"><button class="btn " title="Tambah"><i class="mdi mdi-plus"></i></button></a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <!-- <th>ID Tarif</th> -->
              <th>Jumlah Tarif</th>
              <th>Tanggal Masuk</th>
              <th>Tanggal Keluar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($gas as $dona) { ?>
              <tr>
                <td><?= $no++  ?></td>
                <!-- <td><?= $dona->id_tarif?></td> -->
                <td><?= $dona->jumlah?></td>
                <td><?= $dona->tgl_masuk?></td>
                <td><?= $dona->tgl_keluar?></td>
                <td >
                <!-- <a href="<?= base_url('/home/edit_tarif/'. $dona->id_tarif) ?>"><button class="btn " title="Edit"><i class="mdi mdi-border-color"></i></button></a> -->

                  <a href="<?= base_url('/home/hapus_tarif/'. $dona->id_tarif) ?>"><button class="btn " title="Delete"><i class="mdi mdi-minus-circle-outline "></i></button></a>
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
