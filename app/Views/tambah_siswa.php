<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tambah Data Siswa </h4>
      <form class="forms-sample" action="/home/aksi_siswa" method="POST">


      <div class="form-group">
          <label for="username">NIS :</label>
          <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS Siswa" required>
        </div>

         <div class="form-group">
          <label for="username">Nama Siswa :</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa" required>
        </div>

        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gender <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="jk" name="jk" required class="form-control col-md-7 col-xs-12">
                            <option value="">-Choose Gender-</option>
                             <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
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