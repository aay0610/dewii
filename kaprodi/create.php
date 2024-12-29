<?php
require_once '../layout/top.php';
?>

<section class="section">
  <div class="section-header">
    <h1>Tambah Data Dosen</h1>
  </div>
  <form action="store.php" method="POST">
    <div class="form-group">
      <label for="nidn">NIDN</label>
      <input type="text" class="form-control" id="nidn" name="nidn" required>
    </div>
    <div class="form-group">
      <label for="name">Nama Dosen</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="gender">Jenis Kelamin</label>
      <select class="form-control" id="gender" name="gender" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <input type="text" class="form-control" id="status" name="status" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</section>

<?php
require_once '../layout/bottom.php';
?>
