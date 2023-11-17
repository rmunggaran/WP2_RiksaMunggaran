<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>anu/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <center class="mt-5"><h1>Data mahasiswa</h1></center>
        <table style="margin:20px auto;" class="table table-striped border p-2 mb-2">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Foto</th>
                <th>action</th>
            </tr>
            <?php $no=1;
            foreach($mahasiswa as $u){ ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->nim ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->alamat ?></td>
                <td><?php echo $u->pekerjaan ?></td>
                <td><img src="<?php echo base_url(); ?><?php echo $u->foto ?>" width="50" height="50" class="rounded-circle"></td>
                <td>
                    <a href="<?php echo base_url(); ?>kampus/edit/<?= $u->id ?>/Edit" class="btn btn-primary"> <i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="<?php echo base_url(); ?>kampus/hapus/<?= $u->id ?>/Hapus" class="btn btn-danger"><i class="bi bi-trash-fill"></i> hapus</a>
                </td>
            </tr>
            
            <?php } ?>
        </table>
        <center><?php echo anchor('kampus/tambah','<input type=button value="Tambah Data">'); ?></center>

    </div>
    
</body>
</html>