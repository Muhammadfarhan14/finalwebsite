<?php


    require 'function.php';

    $makanan = query("SELECT * FROM menu WHERE kategori='kuedos'");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
  h3 {
        border: solid 3px;
        width: 90%;
        margin-right: auto;
        margin-left: auto;
    }

    h5 {
        color: white;
    }

    .copy {
        text-align: center;
        color: white;
    }

    .isi{
        margin-top: 100px;
    }


</style>

<body>
    <!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <div class="container fw-bold">
        <a class="navbar-brand" href="#"><img src="Ria 1 (2).png" style="border-radius: 30%;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
          </button>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            MENU
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="menutumpeng.php">Tumpeng</a></li>
                            <li><a class="dropdown-item" href="menunaskot.php">Nasi Kotak</a></li>
                            <li><a class="dropdown-item" href="menukuedos.php">Kue Dos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- card -->
    <section class="isi bg-white">
        <div class="container text-center text-danger">
            <h3>KUE DOS <br> 20 items found</h3>
            <div class="container justify-content-between text-center p-5">
                <div class="row g-3">
                    <?php  foreach ($makanan as $menu) : ?>


                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card bg-danger text-dark">
                        <img src="images/<?= $menu ['foto'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-start"><?= $menu ['nama'] ?><br>
                                    <h5 class="text-start">Rp.<?= $menu ['harga'] ?></h5>
                                </h5>
                                <a href="lihat.php?id=<?= $menu['id'] ?>" type="button"
                                    class="btn btn-light w-100">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <?php
            endforeach;
            ?>
                </div>
            </div>
        </div>
    </section>
    <!-- bawah -->
    <section class="bg-danger text-light">
        <div class="container p-3 text-center">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <p> Lokasi</p>
                    <p>Jalan Cendrawasih <br> Makassar,90134 <br> Email : aanfarhan844@gmail.com </p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="fs-6">Hubungi Saya</p>
                    <p> <a class="nav-link" style="color: white;" href="https://api.whatsapp.com/send?phone=+6281243277070"><i class="bi bi-whatsapp"></i> 0852 4211 5957</a></p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p>Tentang Saya</p><br>
                    <p>Ria catering adalah jasa untuk memenuhi kebutuhan konsumsi Anda,<br> Mulai dari tumpeng, nasi
                        kotak, dan kue dos. <br> Buatan sendiri yang sehat dan halal</p>
                </div>
            </div>
            <div class="text-center">
                <p class="fs-6">Copyright © 2021 Ria Catering</p>
            </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>