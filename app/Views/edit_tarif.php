<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data Tarif</h4>
      <form class="forms-sample" action="/home/aksi_edit_tarif" method="POST">

          <input type="hidden" class="form-control" id="id" name="id" value="<?= $gas->id_tarif?>" required>

         <div class="form-group">
          <label for="tglm">Tanggal Masuk:</label>
          <input type="date" class="form-control" id="tglm" name="tglk" value="<?= $gas->tgl_masuk?>" placeholder="Tanggal Masuk" required>
        </div>

         <div class="form-group">
          <label for="tglk">Tanggal Keluar:</label>
          <input type="date" class="form-control" id="tglk" name="tglk" value="<?= $gas->tgl_keluar?>" placeholder="Tanggal Keluar" required>
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