<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <center>
        <h1>Edit data mahasiswa</h1>
    </center>
    <?php foreach($mahasiswa as $u){ ?>
        <form action="<?php echo base_url(). '/kampus/update'; ?>" method="post" enctype="multipart/form-data">
            <table style="margin:20px auto;">
                <tr>
                    <td>NIM</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input type="text" name="nim" value="<?php echo $u->nim ?>">
                    </td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $u->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $u->alamat ?>">
                    </td>
                </tr>
                <tr>
                    <td>pekerjaan</td>
                    <td>
                        <input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>">
                    </td>
                </tr>
                <tr>
                    <td><img src="<?php echo base_url() ?><?php echo $u->foto ?>" width="50" height="50"></td>
                </tr>
                <tr>
                    <td>Upload Foto</td>
                    <td>
                        <input type="file" name="foto">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="update">
                    </td><?php anchor('kampus','<input type=button value=kembali'); ?>
                </tr>
            </table>
        </form>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>