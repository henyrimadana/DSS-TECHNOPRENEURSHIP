<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_alternatif = $_POST['pilih-alt'];
    $id_bobot = $_POST['pilih-bob'];
    $id_skala = $_POST['pilih-skl'];

    // Validasi form
    if ($id_alternatif == "Pilih Alternatif" || $id_bobot == "Pilih Bobot" || $id_skala == "Pilih Skala") {
        die("<script> 
            alert('Semua form harus terisi!');
            window.location.href = ('form_matrix.php');
            </script>");
    } else {
        // Data sudah valid, lakukan operasi insert
        $sql = "INSERT INTO matrixkeputusan (idalternatif, idbobot, idskala) VALUES ('$id_alternatif', '$id_bobot', '$id_skala')";
        $conn = mysqli_query($con, $sql);
    }


    if ($conn === true) {
        echo "<script> 
        alert('Matrix Keputusan berhasil ditambahkan!');
        window.location.href = ('data_matrix.php');
        </script>";
    } else {
        die("<script> 
        alert('Data belum berhasil ditambahkan!');
        window.location.href = ('form_matrix.php');
        </script>" . mysqli_error($con));
    }
} else {
    // Jika bukan metode POST, mungkin ada akses yang tidak sah
    die("Akses tidak sah!");
}
