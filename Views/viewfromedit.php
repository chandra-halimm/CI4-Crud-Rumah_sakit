<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Pasien</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapses;
        }
    </style>
</head>

<body>

    <div class="w3-content w3-margin-top">

        <h2 class="w3-center">Form Edit Pasien</h2>

        <p>
            <button type="button" onclick="window.location='<?php echo site_url('pasien') ?>'" class="w3-button w3-blue w3-round ">
                Kembali
            </button>
        </p>
        <p>
            <?= form_open('pasien/updatedata'); ?>
        <table>
            <tr>
                <td>ID Pasien :</td>
                <td>
                    <input class="w3-input w3-border" type="number" name="idpasien" maxlength="3" readonly value="<?= $idpasien; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Pasien :</td>
                <td>
                    <input class="w3-input w3-border" type="text" name="nmpasien" size="35" value="<?= $nmpasien; ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat Pasien:</td>
                <td>
                    <input class="w3-input w3-border" type="text" name="alpasien" size="50" value="<?= $alpasien; ?>">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir :</td>
                <td>
                    <input class="w3-input w3-border" type="text" name="tplahir" size="20" value="<?= $tplahir; ?>">
                </td>
            <tr>
                <td>Tanggal Lahir :</td>
                <td> <input class="w3-input w3-border" type="date" name="tglahir" maxlength="3" value="<?= $tglahir; ?>"></td>
            </tr>
            <tr>
                <td>Penjamin :</td>
                <td>
                    <input class="w3-check w3-border" type="radio" name="penjamin" value="A" <?php if ($penjamin == "A") echo 'checked' ?>> BPJS
                    <input class="w3-check w3-border" type="radio" name="penjamin" value="U" <?php if ($penjamin == "U") echo 'checked' ?>> UMUM
                </td>
            </tr>
            <tr>
                <td>
                    <button class="w3-button w3-blue w3-margin-top w3-round" value="simpan" type="submit">
                        Update Data
                    </button>
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
        </p>

    </div>

</body>

</html>