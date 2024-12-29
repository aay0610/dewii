<?php
require_once '../layout/top.php';

// Check if the NIDN is provided
if (isset($_GET['nidn'])) {
    $nidn = $_GET['nidn'];

    // Here you would typically delete the data from the database
    // For demonstration, we'll just echo a confirmation message
    echo "<h1>Data Dosen dengan NIDN $nidn Berhasil Dihapus</h1>";
} else {
    echo "<h1>Invalid Request</h1>";
}

require_once '../layout/bottom.php';
?>
