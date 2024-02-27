<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Dokter </h4>
      <form class="forms-sample" action="/home/aksi_dokter" method="POST">

      <div class="form-group">
          <label for="nama">Kode Dokter  :</label>
          <input type="text" class="form-control" id="kod" name="kod" placeholder="Kode Dokter" required>
        </div>


         <div class="form-group">
          <label for="nama">Nama Dokter  :</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Dokter" required>
        </div>

        <div class="form-group">
          <label for="spesialis">Spesialis :</label>
          <input type="text" class="form-control" id="spesialis" name="spesialis" placeholder="Spesialis" required>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat Dokter :</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Dokter" required>
        </div>

        <div class="form-group">
          <label for="telp">Telp Dokter :</label>
          <input type="text" class="form-control" id="telp" name="telp" placeholder="Telphone Dokter" required>
        </div>

        <div class="form-group">
          <label for="kode">Kode Poliklinik :</label>
          <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Poliklinik" required>
        </div>

        <div class="form-group">
          <label for="tarif">Tarif :</label>
          <input type="text" class="form-control" id="tarif" name="tarif" placeholder="Tarif" required>
        </div>
       <div class="form-group">
       
        <button type="submit" class="btn btn-primary">Input</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
  </body>
  </html>