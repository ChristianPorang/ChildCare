<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">HISTORY !</h4>
      <a href="<?= base_url('/home/tambah_history/') ?>"><button class="btn " title="Tambah"><i class="mdi mdi-plus"></i></button></a>
      <div class="table-responsive">
      <table class="table" id="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Siswa</th>
              <th>January</th>
                <th>February</th>
                <th>March</th>
                <th>April</th>
                <th>May</th>
                <th>June</th>
                <th>July</th>
                <th>August</th>
                <th>September</th>
                <th>October</th>
                <th>November</th>
                <th>December</th>
                <th>Tahun</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($gas as $dona) { ?>
              <tr>
                <td><?= $no++  ?></td>
                <td><?= $dona->nama_siswa?></td>
                <td><?= $dona->januari?></td>
                <td><?= $dona->february ?></td>
                <td><?= $dona->maret ?></td>
                <td><?= $dona->april ?></td>
                <td><?= $dona->may ?></td>
                <td><?= $dona->june ?></td>
                <td><?= $dona->july ?></td>
                <td><?= $dona->august ?></td>
                <td><?= $dona->september ?></td>
                <td><?= $dona->october ?></td>
                <td><?= $dona->november ?></td>
                <td><?= $dona->desember ?></td>
                <td><?= $dona->tahun ?></td>
                <td >
                <a href="<?= base_url('/home/edit_history/'. $dona->id_history) ?>"><button class="btn " title="Edit"><i class="mdi mdi-border-color"></i></button></a>

                  <a href="<?= base_url('/home/hapus_history/'. $dona->id_history) ?>"><button class="btn " title="Delete"><i class="mdi mdi-minus-circle-outline "></i></button></a>
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
