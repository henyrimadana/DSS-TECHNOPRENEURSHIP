<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="header-bar">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Logo di pojok kiri -->
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo techno.png" alt="Logo" width="130" height="50"
                        class="d-inline-block align-text-top me-2">

                </a>

                <!-- Pindahkan menu ke sebelah kanan -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><b>HOME</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#matrix"><b>Matrix</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#normal"><b>Normalisasi</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#max"><b>Maximum</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#min"><b>Minimum</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#pra"><b>Pra Ranking</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#rank"><b>Ranking</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                SAW
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="data_bobot.php">Bobot</a>
                                <a class="dropdown-item" href="data_alternatif.php">Alternatif</a>
                                <a class="dropdown-item" href="data_kriteria.php">Kriteria</a>
                                <a class="dropdown-item" href="data_matrix.php">Matrix</a>
                                <a class="dropdown-item" href="data_skala.php">Skala</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <h1 class="text-center" style="padding: 220px;">SISTEM PENDUKUNG KEPUTUSAN PEREKRUTAN PENGURUS TECHNOPRENEURSHIP
            HIMATIF MENGGUNAKAN METODE SAW</h1>
    </div>
    <div class="container" id="matrix">
        <h1 class="text-center"> Detail Matrix Keputusan</h1>
    </div>
    <hr>
    <?php
    include "config.php";
    $matrix1 = "SELECT * FROM vmatrixkeputusan ORDER BY vmatrixkeputusan.idmatrix ASC";
    $koneksi = $con->query($matrix1);
    $no = 1;
    ?>
    <div class="main-1.1">
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Matrix</th>
                        <th scope="col">Id Alternatif</th>
                        <th scope="col">Nama Alternatif</th>
                        <th scope="col">Id Kriteria</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Id Bobot</th>
                        <th scope="col">Value</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($a = $koneksi->fetch_array()) {
                        ?>
                        <tr>
                            <th>
                                <?= $no++ ?>
                            </th>
                            <td>
                                <?php echo $a['idmatrix'] ?>
                            </td>
                            <td>
                                <?php echo $a['idalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['idkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['idbobot'] ?>
                            </td>
                            <td>
                                <?php echo $a['value'] ?>
                            </td>
                            <td>
                                <?php echo $a['nilai'] ?>
                            </td>
                            <td>
                                <?php echo $a['keterangan'] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <div class="container" id="normal">
        <h1 class="text-center"> Normalisasi</h1>
    </div>
    <hr>
    <?php
    include "config.php";
    $normal1 = "SELECT * FROM vnormalisasi";
    $koneksi = $con->query($normal1);
    $no = 1;
    ?>
    <div class="main-2.1">
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Matrix</th>
                        <th scope="col">Id Alternatif</th>
                        <th scope="col">Nama Alternatif</th>
                        <th scope="col">Id Kriteria</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Id Bobot</th>
                        <th scope="col">Value</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Normalisasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($a = $koneksi->fetch_array()) {
                        ?>
                        <tr>
                            <th>
                                <?= $no++ ?>
                            </th>
                            <td>
                                <?php echo $a['idmatrix'] ?>
                            </td>
                            <td>
                                <?php echo $a['idalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['idkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['idbobot'] ?>
                            </td>
                            <td>
                                <?php echo $a['value'] ?>
                            </td>
                            <td>
                                <?php echo $a['nilai'] ?>
                            </td>
                            <td>
                                <?php echo $a['keterangan'] ?>
                            </td>
                            <td>
                                <?php echo $a['normalisasi'] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container" id="max">
        <h1 class="text-center"> Nilai Maximum</h1>
    </div>
    <hr>
    <?php
    include "config.php";
    $max = "SELECT * FROM nilaimax";
    $koneksi = $con->query($max);
    $no = 1;
    ?>
    <div class="main-2.1">
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Kriteria</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Maksimum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($a = $koneksi->fetch_array()) {
                        ?>
                        <tr>
                            <th>
                                <?= $no++ ?>
                            </th>
                            <td>
                                <?php echo $a['idkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['maksimum'] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container" id="min">
        <h1 class="text-center"> Nilai Minimum</h1>
    </div>
    <hr>
    <?php
    include "config.php";
    $min = "SELECT * FROM nilaimin";
    $koneksi = $con->query($min);
    $no = 1;
    ?>
    <div class="main-2.1">
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Kriteria</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Minimum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($a = $koneksi->fetch_array()) {
                        ?>
                        <tr>
                            <th>
                                <?= $no++ ?>
                            </th>
                            <td>
                                <?php echo $a['idkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['minimum'] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>
    <div class="container" id="pra">
        <h1 class="text-center"> Pra Rangking</h1>
    </div>
    <hr>
    <?php
    include "config.php";
    $pra = "SELECT * FROM vprarangking";
    $koneksi = $con->query($pra);
    $no = 1;
    ?>
    <div class="main-2.1">
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Matrix</th>
                        <th scope="col">Id Alternatif</th>
                        <th scope="col">Nama Alternatif</th>
                        <th scope="col">Id Kriteria</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Id Bobot</th>
                        <th scope="col">Value</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Normalisasi</th>
                        <th scope="col">Pra Rangking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($a = $koneksi->fetch_array()) {
                        ?>
                        <tr>
                            <th>
                                <?= $no++ ?>
                            </th>
                            <td>
                                <?php echo $a['idmatrix'] ?>
                            </td>
                            <td>
                                <?php echo $a['idalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['idkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmkriteria'] ?>
                            </td>
                            <td>
                                <?php echo $a['idbobot'] ?>
                            </td>
                            <td>
                                <?php echo $a['value'] ?>
                            </td>
                            <td>
                                <?php echo $a['nilai'] ?>
                            </td>
                            <td>
                                <?php echo $a['keterangan'] ?>
                            </td>
                            <td>
                                <?php echo $a['normalisasi'] ?>
                            </td>
                            <td>
                                <?php echo $a['prarangking'] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>



    <div class="container" id="rank">
        <h1 class="text-center"> Rangking</h1>
    </div>
    <hr>
    <?php
    include "config.php";
    $rank1 = "SELECT * FROM vrangking order by rangking desc";
    $koneksi = $con->query($rank1);
    $no = 1;
    ?>
    <div class="main-3.1">
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Rangking</th>
                        <th scope="col">Id Alternatif</th>
                        <th scope="col">Nama Alternatif</th>
                        <th scope="col">Hasil Ranking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($a = $koneksi->fetch_array()) {
                        ?>
                        <tr>
                            <th>
                                <?= $no++ ?>
                            </th>
                            <td>
                                <?php echo $a['idalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['rangking'] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>