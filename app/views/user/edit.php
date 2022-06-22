<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['login'])){
        header ('location: '.URL);
        exit();
    }
?>
<!doctype html>
<html lang="en" class="ms-5 me-5">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="<?php echo URL; ?>/layouts/assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo URL; ?>/layouts/assets/img/logo.png">

        <title>PLN</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-success bg-gradient">
            <div class="container-fluid">
                <a class="navbar-brand text-light fs-2" href="<?php echo URL; ?>/dashboard"><img src="<?php echo URL; ?>/layouts/assets/img/logo.png" alt="" width="80" height="60" class="d-inline-block align-text-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light fs-5" aria-current="page" href="<?php echo URL; ?>/pelanggan">Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-5" href="<?php echo URL; ?>/golongan">Golongan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-5" href="<?php echo URL; ?>/user">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light fs-5" href="<?php echo URL; ?>/user/logout" onclick="return confirm('Anda Yakin Ingin Keluar?');">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:600px">
            <h3 class="mb-5">Edit User</h3>
            <form action="<?php echo URL; ?>/user/update" method="post" class="row g-3">
            <?php
                $role = ($data['user_role']=="1")?"Admin":"User";
                $aktif = ($data['user_aktif']=="1")?"Aktif":"Tidak Aktif";
            ?>
            <input type="hidden" name="user_id" value="<?= $data['user_id']; ?>">
                <div class="col-md-3">
                    <label class="form-label">Nama User</label>
                    <input type="text" class="form-control" placeholder="Nama User" name="user_nama" value="<?= $data['user_nama']; ?>" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Handphone</label>
                    <input type="text" class="form-control" placeholder="Handphone" name="user_hp" value="<?= $data['user_hp']; ?>" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="user_email" value="<?= $data['user_email']; ?>" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="user_password" value="<?= $data['user_password']; ?>" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="user_alamat" value="<?= $data['user_alamat']; ?>" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" placeholder="Kode Pos" name="user_pos" value="<?= $data['user_pos']; ?>" required>
                </div>
                <div class="w-50">
                    <label class="form-label">Aktif</label>
                    <select class="form-select w-50" name="user_aktif">
                        <option selected><?= $aktif; ?></option>
                        <option value="1">Aktif</option>
                        <option value="2">Tidak Aktif</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="user_role">
                        <option selected><?= $role; ?></option>
                        <option value="1">Administrator</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btn_update">Simpan</button>
                </div>
            </form>
        </div>
        <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022</p>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo13oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>