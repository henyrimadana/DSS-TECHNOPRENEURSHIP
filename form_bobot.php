<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bobot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main-form">
        <div class="row justify-content-end">
            <div class="col-8">
                <div class="side-left" style="padding: 100px; background-color: rgb(255, 255, 255);">
                    <h1 class="text-center" style="padding-bottom: 50px;">Form Bobot</h1>
                    <div class="container">
                        <form action="insert_bobot.php" method="POST">
                            <div class="row mb-3">
                                <label for="id_bobot" class="col-sm-3 col-form-label">ID:</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="id_bobot" type="text" placeholder="Telah di Input" aria-label="Disabled input example" disabled>
                                </div>
                            </div>
                            <?php
                            include "config.php";
                            $kriteria = "SELECT * FROM kriteria";
                            $result = $con->query($kriteria);
                            ?>
                            <div class="row mb-3">
                                <label for="pilih-kri" class="col-sm-3 col-form-label">Kriteria:</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="pilih-kri" id="pilih-kri">
                                        <option selected disabled>Pilih Kriteria</option>
                                        <?php
                                        while ($row = $result->fetch_array()) {
                                        ?>
                                            <option value="<?php echo $row['idkriteria'] ?>"><?php echo $row['nmkriteria'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="value" class="col-sm-3 col-form-label">Value:</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="value" type="text" placeholder="Nilai Bobot" aria-label="default input example">
                                </div>
                            </div>
                            <div class="justify-content-end">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.href='data_bobot.php'">Kembali</button>
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