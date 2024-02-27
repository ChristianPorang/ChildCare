<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Tarif </h4>
      <form class="forms-sample" action="/home/aksi_history" method="POST">
      
      <div class="form-group">
          <label for="nama">Nama Siswa :</label>
          <select class="form-control col-md-7 col-xs-12" id="nama" name="nama"required>
            <option>= Nama Siswa =</option>
            <?php
            foreach($rooms as $room){
              ?>
              <option value="<?= $room->nama_siswa; ?>"><?=$room->nama_siswa; ?></option>

           <?php } ?>
         </select>
        </div>

        <style>
  option {
    color: white;
  }
</style>



        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">January <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="a" name="a" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">February <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="b" name="b" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Maret <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="c" name="c" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">April <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="d" name="d" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">May <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="e" name="e" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">June <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="f" name="f" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">July <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="g" name="g" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">August <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="h" name="h" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">September <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="i" name="i" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">October <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="j" name="j" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">November <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="k" name="k" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">December <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="l" name="l" required class="form-control col-md-7 col-xs-12">
                          <option value="Status">Status</option>
                             <option value="Lunas">Lunas</option>
                              <option value="Belum Lunas">Belum Lunas</option>
                          </select>
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tahun Ajaran <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  id="th" name="th" required class="form-control col-md-7 col-xs-12">
                             <option value="2024">2024</option>
                              <option value="2025">2025</option>
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