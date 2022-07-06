<?php

require 'function.php' ;
 $makanan = query("SELECT * FROM menu ORDER BY id DESC");
 $tumpeng = query("SELECT * FROM menu WHERE kategori = 'tumpeng'");
 $naskot = query("SELECT * FROM menu WHERE kategori = 'nasikotak'");
 $kuedos = query("SELECT * FROM menu WHERE kategori = 'kuedos'");

 if(isset($_POST['cari'])){
    $makanan = boya($_POST['keyword']);
    $tumpeng = boya($_POST["keyword"]);
    $naskot = boya($_POST["keyword"]);
    $kuedos = boya($_POST["keyword"]);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ria Catering</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<style>
    .container1 {
        color: white;
    }

    .copy {
        text-align: center;
        color: white;
    }

    .carousel img {
        height: 450px;
    }

    h5 {
        color: white;
    }

    h3 {
        border: solid 3px;
        width: 90%;
        margin-right: auto;
        margin-left: auto;
    }

    .btn {
        transition: .5s ease;
    }

    .ria {
        position: absolute;
        z-index: 10;
        top: 30%;
        left: 35%;
        right: 35%;
    }

    .gambar {
        position: relative;
    }

    .ria h1,
    h4 {
        text-shadow: 3px 3px black;
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
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
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
                    <form class="d-flex" method="post">
                        <input name="keyword" class="form-control me-2" type="search" placeholder="Search"aria-label="Search"></input>
                        <button name="cari" class="btn btn-outline-light me-1" type="submit">Search</button>
                        <a href="login.php"><button type="button" class="btn btn-outline-light">Login</button></a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!--Header-->
    <header class="text-white text-center">
        <div class="container1">
            <div class="ria">
                <h1>Ria Catering</h1>
                <h4>Tumpeng | Kue Dos | Nasi Kotak </h4>
            </div>
            <div class="gambar">
                <div id="carouselExampleInterval" class="carousel slide position-relative" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="foto/menu3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="foto/Nasi Tumpeng 1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="foto/menu6.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>
    </header>
    <!--Menu Terlaris-->
    <section class="bg-white p-3">
        <div class="container text-center text-danger">
            <h3>MENU TERLARIS BULAN INI</h3>
            <div class="container p-4 text-center">
                <div class="row g-3">
                    <?php 
                    foreach ($makanan as $i => $menu):
                        if($i === 3){ break; }
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card bg-danger text-dark h-100">
                            <img src="images/<?= $menu ['foto'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-start"><?= $menu['nama']?><br>
                                    <h5 class="text-start">Rp.<?= $menu ['harga'] ?></h5>
                                </h5>
                                <a href="lihat.php?id=<?= $menu['id'] ?>" type="button"
                                    class="btn btn-light w-100">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endforeach ;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!--Menu Tumpeng-->
    <section class="bg-white p-3">
        <div class="container text-center text-danger">
            <h3>MENU NASI TUMPENG</h3>
            <div class="container p-4 text-center">
                <div class="row g-3">
                    <?php 
                    foreach ($tumpeng as $i => $menu):
                        if($i === 3){ break; }
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card bg-danger text-dark">
                            <img src="images/<?= $menu ['foto'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-start"><?= $menu['nama']?><br>
                                    <h5 class="text-start">Rp.<?= $menu ['harga'] ?></h5>
                                </h5>
                                <a href="lihat.php?id=<?= $menu['id'] ?>" type="button"
                                    class="btn btn-light w-100">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endforeach ;
                    ?>
                </div>
            </div>
            <a href="menutumpeng.php"><button type="button" class="btn btn-danger fw-bold">
                    Lihat menu lainnya</button></a>
        </div>
    </section>

    <!--Menu Naskot-->
    <section class="bg-white p-3">
        <div class="container text-center text-danger">
            <h3>MENU NASI KOTAK</h3>
            <div class="container p-4 text-center">
                <div class="row g-3">
                    <?php 
                    foreach ($naskot as $i => $menu):
                        if($i === 3){ break; }
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card bg-danger text-dark">
                            <img src="images/<?= $menu ['foto'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-start"><?= $menu['nama']?><br>
                                    <h5 class="text-start">Rp.<?= $menu ['harga'] ?></h5>
                                </h5>
                                <a href="lihat.php?id=<?= $menu['id'] ?>" type="button"
                                    class="btn btn-light w-100">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endforeach ;
                    ?>
                </div>
            </div>
            <a href="menunaskot.php"><button type="button" class="btn btn-danger fw-bold">
                    Lihat menu lainnya</button></a>
        </div>
    </section>

    <!--Menu Kuedos-->
    <section class="bg-white p-3">
        <div class="container text-center text-danger">
            <h3>MENU KUE DOS</h3>
            <div class="container p-4 text-center">
                <div class="row g-3">
                    <?php 
                    foreach ($kuedos as $i => $menu):
                        if($i === 3){ break; }
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card bg-danger text-dark">
                            <img src="images/<?= $menu ['foto'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-start"><?= $menu['nama']?><br>
                                    <h5 class="text-start">Rp.<?= $menu ['harga'] ?></h5>
                                </h5>
                                <a href="lihat.php?id=<?= $menu['id'] ?>" type="button"
                                    class="btn btn-light w-100">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endforeach ;
                    ?>
                </div>
            </div>
            <a href="menukuedos.php"><button type="button" class="btn btn-danger fw-bold">
                    Lihat menu lainnya</button></a>
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
                    <p> <a class="nav-link" style="color: white;"
                            href="https://api.whatsapp.com/send?phone=+6281243277070"><i class="bi bi-whatsapp"></i>
                            081243277070</a></p>
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