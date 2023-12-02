<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alternatif</title>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                            <a class="nav-link" aria-current="page" href="index.php"><b>HOME</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                SAW
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="data_bobot.php">Bobot</a>
                                <a class="dropdown-item active bg-dark" href="data_alternatif.php">Alternatif</a>
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
        <h1 class="text-center py-4 mt-3">Data Alternatif</h1>
    </div>
    <hr>
    <?php
    include "config.php";
    $alternatif = "SELECT * FROM alternatif";
    $koneksi = $con->query($alternatif);
    $no = 1;
    ?>
    <div class="main-1">
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">NO</th>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col">Nama Alternatif</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($a = $koneksi->fetch_array()) {
                        ?>
                        <tr>
                            <th class="text-center">
                                <?= $no++ ?>
                            </th>
                            <td class="text-center">
                                <?php echo $a['idalternatif'] ?>
                            </td>
                            <td>
                                <?php echo $a['nmalternatif'] ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="form_alternatif.php"><button class="btn btn-dark">Tambah Data</button></a>
        </div>
    </div>
</body>

</html>