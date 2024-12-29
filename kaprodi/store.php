<?php
require_once '../layout/top.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $nidn = $_POST['nidn'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];

    // Here you would typically insert the data into a database
    // For demonstration, we'll just echo the data
    echo "<h1>Data Dosen Berhasil Ditambahkan</h1>";
    echo "<p>NIDN: $nidn</p>";
    echo "<p>Nama Dosen: $name</p>";
    echo "<p>Jenis Kelamin: $gender</p>";
    echo "<p>Status: $status</p>";
} else {
    echo "<h1>Invalid Request</h1>";
}

require_once '../layout/bottom.php';
?>
