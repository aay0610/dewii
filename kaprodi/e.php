<?php
require_once '../layout/top.php';

// Simulating retrieval of existing data (in a real application, this would come from a database)
$nidn = $_GET['nidn'] ?? '';
$name = $_GET['name'] ?? '';
$gender = $_GET['gender'] ?? '';
$status = $_GET['status'] ?? '';

?>

<section class="section">
  <div class="section-header">
    <h1>Edit Data Dosen</h1>
  </div>
  <form action="update.php" method="POST">
    <input type="hidden" name="nidn" value="<?php echo htmlspecialchars($nidn); ?>">
    <div class="form-group">
      <label for="name">Nama Dosen</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
    </div>
    <div class="form-group">
      <label for="gender">Jenis Kelamin</label>
      <select class="form-control" id="gender" name="gender" required>
        <option value="Laki-laki" <?php echo ($gender == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
        <option value="Perempuan" <?php echo ($gender == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <input type="text" class="form-control" id="status" name="status" value="<?php echo htmlspecialchars($status); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</section>

<?php
require_once '../layout/bottom.php';
?>
