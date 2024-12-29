<?php
require_once '../layout/top.php';

// Read the data from the file
$data = [];
if (file_exists('data.txt')) {
    $data = json_decode(file_get_contents('data.txt'), true);
}

?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>List Dosen</h1>
    <a href="./create.php" class="btn btn-primary">Tambah Data</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped w-100" id="table-1">
              <thead>
                <tr>
                  <th>NIDN</th>
                  <th>Nama dosen</th>
                  <th>Jenis Kelamin</th>
                  <th>Status</th>
                  <th style="width: 150">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td><?php echo htmlspecialchars($data['nidn'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($data['name'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($data['gender'] ?? ''); ?></td>
                    <td><?php echo htmlspecialchars($data['status'] ?? ''); ?></td>
                    <td>
                      <a class="btn btn-sm btn-danger mb-md-0 mb-1" href="delete.php?nidn=<?php echo htmlspecialchars($data['nidn'] ?? ''); ?>">
                        <i class="fas fa-trash fa-fw"></i>
                      </a>
                      <a class="btn btn-sm btn-info" href="e.php?nidn=<?php echo htmlspecialchars($data['nidn'] ?? ''); ?>&name=<?php echo htmlspecialchars($data['name'] ?? ''); ?>&gender=<?php echo htmlspecialchars($data['gender'] ?? ''); ?>&status=<?php echo htmlspecialchars($data['status'] ?? ''); ?>">
                        <i class="fas fa-edit fa-fw"></i>
                      </a>
                    </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/bottom.php';
?>
