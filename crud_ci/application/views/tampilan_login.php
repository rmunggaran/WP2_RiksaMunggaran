<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        input[type=text],input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #0d6efd;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover{
    background-color: #45a049;
    
  }

  div {
    border-radius: 5px;
    padding: 20px;
  }
    </style>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-5 bg-light">
            <h1>Login</h1>
            <form action="<?= base_url('login/aksi_login'); ?>" method="post">
                <label for="fname">Username</label>
                <input type="text" name="username" id="fname" placeholder="username">
                <label for="fname">Password</label>
                <input type="text" name="password" id="fname" placeholder="password">

                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>