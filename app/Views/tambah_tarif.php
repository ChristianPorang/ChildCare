<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tarif </h4>
      <form class="forms-sample" action="/home/aksi_tarif" method="POST">


      
      <div class="form-group">
          <label for="nama">Jumlah Tarif:</label>
          <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Tarif" required>
        </div>

         <div class="form-group">
          <label for="tglm">Tanggal Masuk:</label>
          <input type="date" class="form-control" id="tglm" name="tglm" placeholder="Tanggal Masuk" required>
        </div>

        <div class="form-group">
          <label for="tglk">Tanggal Keluar :</label>
          <input type="date" class="form-control" id="tglk" name="tglk" placeholder="Tanggal Keluar" required>
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