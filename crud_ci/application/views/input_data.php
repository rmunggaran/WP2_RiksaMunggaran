<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data mahasiswa</title>
</head>
<body>
    <center>
        Input Data mahasiswa
    </center>
    <form action="<?php echo base_url(). 'index.php/kampus/tambah_aksi'; ?>" method="post" enctype="multipard/form-data">
        <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>pekerjaan</td>
            <td><input type="text" name="pekerjaan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tambah"><input type="reset" value="Batal"></td>
        </tr>
        </table>
    </form>
</body>
</html>