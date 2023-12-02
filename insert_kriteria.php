<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kriteria = $_POST['nama_kriteria'];
    $tipe_kriteria = $_POST['pilih-kri'];

    // Validasi form
    if (empty($nama_kriteria) || empty($tipe_kriteria) || $tipe_kriteria == "Pilih Tipe Kriteria") {
        die("<script> 
            alert('Semua form harus terisi!');
            window.location.href = ('form_kriteria.php');
            </script>");
    } else {
        // Data sudah valid, lakukan operasi insert
        $sql = "INSERT INTO `kriteria` (`nmkriteria`, `tipe`) VALUES ('$nama_kriteria', '$tipe_kriteria');";
        $conn = mysqli_query($con, $sql);
    }

    if ($conn === true) {
        echo "<script> 
        alert('Data kriteria berhasil ditambahkan!');
        window.location.href = ('data_kriteria.php');
        </script>";
    } else {
        die("<script> 
        alert('Data belum berhasil ditambahkan!');
        window.location.href = ('form_kriteria.php');
        </script>" . mysqli_error($con));
    }
} else {
    // Jika bukan metode POST, mungkin ada akses yang tidak sah
    die("Akses tidak sah!");
}
