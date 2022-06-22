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
        <link rel="shortcut icon" href="<?php echo URL; ?>/layouts/assets/img/logo-listrik.png">

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
        <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:550px">
        <a href="<?php echo URL; ?>/golongan/create" class="btn btn-secondary mb-2 float-end">Tambah Golongan</a>
            <table class="table table-striped">
                <tr class="table-primary text-center">
                    <th>ID</td>
                    <th>Nama Golongan</td>
                    <th>Kode Golongan</td>
                    <th colspan="2" style="width:60px;">Aksi</td>
                </tr>
                <?php
                    foreach($data as $row){ ?>
                        <tr>
                            <td class="text-center"><?= $row['gol_id']; ?></td>
                            <td><?= $row['gol_nama']; ?></td>
                            <td class="text-center"><?= $row['gol_kode']; ?></td>
                            <td class="text-center" style="width:50px;"><a href="<?= URL; ?>/golongan/edit/<?= $row['gol_id']; ?>" class="badge text-bg-warning text-decoration-none">Edit</a></td>
                            <td class="text-center" style="width:50px;"><a href="<?= URL; ?>/golongan/delete/<?= $row['gol_id']; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>
                        </tr>
                    <?php } ?>
            </table>
        </div>
        <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022</p>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>