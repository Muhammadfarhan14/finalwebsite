<?php

$id = $_GET['id'];
require 'function.php';
$query = mysqli_query($conn,"SELECT * FROM menu WHERE id = '$id'");
$detail = mysqli_fetch_assoc($query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<style>
    .copy {
        text-align: center;
        color: white;
    }

    hr {
        width: 550px;
    }

    .option {
        width: 70px;
    }
    
    .btn{
        width: 200px;
    }

    .isi{
        margin-top: 70px;
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
    <section class="container bg-white p-3">
        <div class="isi text-start">
            <h3><?= $detail['nama'] ?></h3>
            <hr>
            <p>minimal order : 20 pax | pemesanan minimal di lakukan 1 hari sebelumnya</p>
            <div class="icon d-flex">
                <img src="images/<?= $detail['foto'] ?>" style="width:400px; height:300px; " alt="">
                <div class="icon ms-3">
                    <h3>
                        <i class="bi bi-cash-stack"></i> Rp <?= $detail['harga'] ?>
                    </h3>
                    <p> <?= $detail['detail'] ?></p>
                    <button class="btn btn-danger" type="button">
                            <a href="https://api.whatsapp.com/send?phone=+6281243277070&text=Halo Saya Mau Pesan Nasi Gulai Telur 20 pax apakah ready?">
                                <i class="bi bi-whatsapp" style="color: white;"> Hubungi Kami Di Sini</i>
                            </a>
                        </button>
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