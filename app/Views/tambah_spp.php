<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Input</h4>
      <form class="forms-sample" action="/home/aksi_spp" method="POST">
      
      <div class="form-group">
          <label for="kode">Kode SPP:</label>
          <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode SPP" required>
      </div>

      <div class="form-group">
          <label for="nama">Bulan :</label>
          <select class="form-control" id="bulan" name="bulan"required>
            <option>=Bulan=</option>
            <?php
            foreach($rooms as $room){
              ?>
              <option value="<?= $room->id_siswa; ?>"><?=$room->nama_siswa; ?></option>

           <?php } ?>
         </select>
        </div>

        <div class="form-group">
          <label for="nama">Nama Siswa :</label>
          <select class="form-control" id="nama" name="nama"required>
            <option>= Nama Siswa =</option>
            <?php
            foreach($rooms as $room){
              ?>
              <option value="<?= $room->id_siswa; ?>"><?=$room->nama_siswa; ?></option>

           <?php } ?>
         </select>
        </div>

        <div class="form-group">
          <label for="biaya">Biaya :</label>
          <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya" required>
        </div>

        <div class="form-group">
          <label for="denda">Denda :</label>
          <input type="text" class="form-control" id="denda" name="denda" placeholder="Denda" required>
        </div>

        <div class="form-group">
          <label for="tgl">Tanggal Bayar :</label>
          <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal Bayar" required>
        </div>

        <div class="form-group">
          <label for="waktu">Waktu :</label>
          <input type="time" class="form-control" id="waktu" name="waktu" placeholder="Waktu" required>
        </div>

        <button type="submit" class="btn btn-primary">Input</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
    <script>
      
        function generateCode(length) {
            const chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return result;
        }

   
        document.getElementById('kode').value = generateCode(8);


        document.getElementById('generatedKode').innerText = "Generated Kode: " + generateCode(8);
    </script>
  </body>
</html>
