<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['value'];
    $keterangan = $_POST['keterangan'];

    // Validasi form
    if (empty($nilai) || empty($keterangan)) {
        die("<script> 
            alert('Semua form harus terisi!');
            window.location.href = ('form_skala.php');
            </script>");
    } else {
        // Data sudah valid, lakukan operasi insert
    $sql = "INSERT INTO `skala` (`value`, `keterangan`) VALUES ('$nilai', '$keterangan');";
    $conn = mysqli_query($con, $sql);
    }

    if ($conn === true) {
        echo "<script> 
        alert('Data Skala berhasil ditambahkan!');
        window.location.href = ('data_skala.php');
        </script>";
    } else {
        die("<script> 
        alert('Data belum berhasil ditambahkan!');
        window.location.href = ('form_skala.php');
        </script>" . mysqli_error($con));
    }
} else {
    // Jika bukan metode POST, mungkin ada akses yang tidak sah
    die("Akses tidak sah!");
}
?>