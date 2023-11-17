<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <center>
        <label style="color:#FF0000"><?php echo validation_errors(); ?></label>
    </center>
    <div class="container-fluid mt-5">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <form action="<?php echo base_url() . 'index.php/kampus/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                        <div class="d-flex justify-content-between mb-3">
                            <h3 class="text-primary"><i class="fa fa-hashtag me-2">Input Data mahasiswa</i></h3>
                           
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nim">
                            <label for="floatingInput">NIM</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="nama">
                            <label for="floatingInput">Nama</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="alamat">
                            <label for="floatingInput">alamat</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="pekerjaan">
                            <label for="floatingInput">pekerjaan</label>
                        </div>
                            <input class="form-control mb-3" type="file" id="formFile" name="foto">
                        <input type="submit" value="Tambah" class="btn btn-primary py-3 w-100 mb-4">
                    </form>
                    <a href="<?php echo base_url(); ?>/kampus" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>