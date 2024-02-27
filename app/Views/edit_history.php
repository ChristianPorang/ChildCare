<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit History</h4>
      <form class="forms-sample" action="/home/aksi_edit_history" method="POST">

          <input type="hidden" class="form-control" id="id" name="id" value="<?= $gas->id_history?>" required>

         <div class="form-group">
          <label for="nis">Nama Siswa:</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $gas->nama_siswa?>" placeholder="Nama Siswa" required>
        </div>

     
        <div class="form-group">
          <label for="nis">Januari:</label>
          <input type="text" class="form-control" id="a" name="a" value="<?= $gas->januari?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">February:</label>
          <input type="text" class="form-control" id="b" name="b" value="<?= $gas->february?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">Maret:</label>
          <input type="text" class="form-control" id="c" name="c" value="<?= $gas->maret?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">April:</label>
          <input type="text" class="form-control" id="d" name="d" value="<?= $gas->april?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">May:</label>
          <input type="text" class="form-control" id="e" name="e" value="<?= $gas->may?>" placeholder="Status" required>
        </div>


        <div class="form-group">
          <label for="nis">June:</label>
          <input type="text" class="form-control" id="f" name="f" value="<?= $gas->june?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">July:</label>
          <input type="text" class="form-control" id="g" name="g" value="<?= $gas->july?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">August:</label>
          <input type="text" class="form-control" id="h" name="h" value="<?= $gas->august?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">September:</label>
          <input type="text" class="form-control" id="i" name="i" value="<?= $gas->september?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">October:</label>
          <input type="text" class="form-control" id="j" name="j" value="<?= $gas->october?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">November:</label>
          <input type="text" class="form-control" id="k" name="k" value="<?= $gas->november?>" placeholder="Status" required>
        </div>
        <div class="form-group">
          <label for="nis">December:</label>
          <input type="text" class="form-control" id="l" name="l" value="<?= $gas->desember?>" placeholder="Status" required>
        </div>

        <div class="form-group">
          <label for="nis">Tahun:</label>
          <input type="text" class="form-control" id="th" name="th" value="<?= $gas->tahun?>" placeholder="Tahun Ajaran" required>
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