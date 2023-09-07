<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapses;
        }
    </style>
</head>

<body>

    <div class="w3-content">
        <h2 class="w3-center w3-bold">DATA PASIEN</h2>

        <button class="w3-margin-bottom w3-button w3-blue" type="button" onclick="window.location='<?php echo site_url('pasien/formtambah') ?>'" class="w3-button w3-blue">
            Tambah Data
        </button>

        <table border="1" class="w3-table w3-striped">
            <thead class="w3-blue">
                <th>No.</th>
                <th>ID pasien</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Penjamin</th>
                <th>Aksi</th>
            </thead>

            <tbody>
                <?php
                $nomor = 0;
                foreach ($tampildata as $row) :
                    $nomor++;
                ?>

                    <tr>
                        <td class="w3-center"><?= $nomor; ?></td>
                        <td class="w3-center"><?= $row->idpasien; ?></td>
                        <td><?= $row->nmpasien; ?></td>
                        <td class="w3-center"><?= $row->tglahir; ?></td>
                        <td class="w3-center"><?= $row->penjamin; ?></td>



                        <td>
                            <button class="w3-button w3-blue" type="button" onclick="window.location='<?php echo site_url('pasien/formedit/' . $row->idpasien) ?>'">
                                Edit
                            </button>
                            <button class="w3-button w3-blue" type="button" onclick="hapus('<?= $row->idpasien; ?>')">Hapus</button>
                        </td>
                    </tr>

                <?php
                endforeach;
                ?>
            </tbody>
        </table>


    </div>

    <script>
        function hapus(idpasien) {
            pesan = confirm('Yakin hapus data ini ?');

            if (pesan) {
                window.location.href = ("<?= site_url('pasien/hapus/'); ?>") + idpasien;
            } else return false
        }
    </script>
</body>

</html>