<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Matrix-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main-form">
        <div class="row justify-content-end">
            <div class="col-8">
                <div class="side-left" style="padding: 100px; background-color: rgb(255, 255, 255);">
                    <h1 class="text-center" style="padding-bottom: 50px;">Form Matrix-1</h1>
                    <div class="container">
                        <form action="insert_matrix.php" method="POST">
                            <div class="row mb-3">
                                <label for="id_matrix" class="col-sm-3 col-form-label">ID:</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="id_matrix" type="text" placeholder="Telah di Input" aria-label="Disabled input example" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <?php
                                include "config.php";
                                $alternatif = "SELECT * FROM alternatif";
                                $result = $con->query($alternatif);
                                ?>
                                <label for="id_alternatif" class="col-sm-3 col-form-label">Alternatif:</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="pilih-alt" id="pilih-alt">
                                        <option selected disabled>Pilih Alternatif</option>
                                        <?php
                                        while ($row = $result->fetch_array()) {
                                        ?>
                                            <option value="<?php echo $row['idalternatif'] ?>"><?php echo $row['nmalternatif'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input class="form-control" name="id_alternatif" type="text" placeholder="ID Alternatif" aria-label="Default input example"> -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <?php
                                include "config.php";
                                $bobot = "SELECT * FROM bobot";
                                $result = $con->query($bobot);
                                ?>
                                <label for="id_bobot" class="col-sm-3 col-form-label">Bobot:</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="pilih-bob" id="pilih-bob">
                                        <option selected disabled>Pilih Bobot</option>
                                        <?php
                                        while ($row = $result->fetch_array()) {
                                        ?>
                                            <option value="<?php echo $row['idbobot'] ?>"><?php echo $row['value'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input class="form-control" name="id_bobot" type="text" placeholder="ID Bobot" aria-label="Default input example"> -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <?php
                                include "config.php";
                                $skala = "SELECT * FROM skala";
                                $result = $con->query($skala);
                                ?>
                                <label for="id_skala" class="col-sm-3 col-form-label">Skala:</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="pilih-skl" id="pilih-skl">
                                        <option selected disabled>Pilih Skala</option>
                                        <?php
                                        while ($row = $result->fetch_array()) {
                                        ?>
                                            <option value="<?php echo $row['idskala'] ?>"><?php echo $row['keterangan'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input class="form-control" name="id_skala" type="text" placeholder="ID Skala" aria-label="default input example"> -->
                                </div>
                            </div>
                            <div class="justify-content-end">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.href='data_matrix.php'">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4 bg-dark">
                <div class="side-right d-flex align-items-center justify-content-center" style="height: 100vh;">
                    <!-- Code for the logo -->
                    <img src="img/logo techno.png" alt="logo" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</body>

</html>