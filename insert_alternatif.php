<?php
include "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $id = $_POST['id_alternatif'];
    $alternatif = $_POST['nama_alternatif'];

    // Validasi form
    if (empty($alternatif)) {
        die("<script> 
            alert('Semua form harus terisi!');
            window.location.href = ('form_alternatif.php');
            </script>");
    } else {
        $sql = "INSERT INTO `alternatif` (`nmalternatif`) VALUES ('$alternatif');";
        $conn = mysqli_query($con, $sql);
    }

    if ($conn === true) {
        echo "<script> 
        alert ('Data Alternatif berhasil ditambahkan !!!!');
        window.location.href = ('data_alternatif.php');
        </script>";
    } else {
        die("<script> 
        alert ('Data Belum berhasil ditambahkan !!!!');
        window.location.href = ('form_alternatif.php');
        </script>" . mysqli_error($con));
    }
} else {
    // Jika bukan metode POST, mungkin ada akses yang tidak sah
    die("Akses tidak sah!");
}
?>
