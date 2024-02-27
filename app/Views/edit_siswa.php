<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data Siswa</h4>
      <form class="forms-sample" action="/home/aksi_Edit_siswa" method="POST">

          <input type="hidden" class="form-control" id="id" name="id" value="<?= $gas->id_siswa?>" required>

         <div class="form-group">
          <label for="nis">NIS:</label>
          <input type="text" class="form-control" id="nis" name="nis" value="<?= $gas->nis?>" placeholder="Tanggal Masuk" required>
        </div>

         <div class="form-group">
          <label for="nama">Nama Siswa:</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $gas->nama_siswa?>" placeholder="Tanggal Keluar" required>
        </div>

        <div class="form-group">
          <label for="gender">Gender Pasien:</label>
          <input type="text" class="form-control" id="jk" name="jk" value="<?= $gas->jk?>" placeholder="Gender Pasien" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Input</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
  </body>
  </html>