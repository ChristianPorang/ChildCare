<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Ortu</h4>
 
      <a href="<?= base_url('/home/tambah_ortu/') ?>"><button class="btn " title="Tambah"><i class="mdi mdi-plus"></i></button></a>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Ortu</th>
              <th>Nama Anak Kandung</th>
              <th>JK</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach($gas as $dona) { ?>
              <tr>
                <td><?= $no++  ?></td>
                <td><?= $dona->nama_ortu?></td>
                <td><?= $dona->nama_anak_kandung?></td>
                <td><?= $dona->jk?></td>
                <td><?= $dona->alamat?></td>
   
                <td >
                <a href="<?= base_url('/home/edit_ortu/'. $dona->id_ortu) ?>"><button class="btn " title="Edit"><i class="mdi mdi-border-color"></i></button></a>

                  <a href="<?= base_url('/home/hapus_ortu/'. $dona->id_ortu) ?>"><button class="btn " title="Delete"><i class="mdi mdi-minus-circle-outline "></i></button></a>
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
