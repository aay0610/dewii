<?php
require_once '../layout/top.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $nidn = $_POST['nidn'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];

    // Simulate saving the data (in a real application, this would involve a database)
    $data = [
        'nidn' => $nidn,
        'name' => $name,
        'gender' => $gender,
        'status' => $status,
    ];

    // Save the data to a file (for demonstration purposes)
    $saveStatus = file_put_contents('data.txt', json_encode($data));
    if ($saveStatus === false) {
        echo "<h1>Error saving data!</h1>";
        exit;
    }

    echo "<h1>Data Dosen Berhasil Diperbarui</h1>";
    echo "<p>NIDN: $nidn</p>";
    echo "<p>Nama Dosen: $name</p>";
    echo "<p>Jenis Kelamin: $gender</p>";
    echo "<p>Status: $status</p>";
    echo "<hr>"; // Add a horizontal line for separation
} else {
    echo "<h1>Invalid Request</h1>";
}

require_once '../layout/bottom.php';
?>
