<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["value"];
    $idkriteria = $_POST["pilih-kri"];

    // Validasi form
    if (empty($value) || $id_kriteria == "Pilih Kriteria") {
        die("<script> 
            alert('Semua form harus terisi!');
            window.location.href = ('form_bobot.php');
            </script>");
    } else {
        // Data sudah valid, lakukan operasi insert
        $sql = "INSERT INTO bobot (idkriteria, value) VALUES ('$idkriteria', '$value')";
        $conn = $con->query($sql);
    }


    if ($conn === true) {
        echo "<script> 
        alert('Data Bobot berhasil ditambahkan!');
        window.location.href = ('data_bobot.php');
        </script>";
    } else {
        die("<script> 
        alert('Data belum berhasil ditambahkan!');
        window.location.href = ('form_bobot.php');
        </script>" . mysqli_error($con));
    }
} else {
    // Jika bukan metode POST, mungkin ada akses yang tidak sah
    die("Akses tidak sah!");
}
