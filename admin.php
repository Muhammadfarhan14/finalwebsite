<?php
session_start();
include 'function.php';

if(!isset($_SESSION['userweb'])){
    header('location:login.php');
}  
 
$jmldataperhalaman = 15;
$jumlahdata = count(query("SELECT * FROM menu"));
$jumlahhalaman = ceil($jumlahdata / $jmldataperhalaman);
$halamanaktif = (isset($_GET['halaman']) ? $_GET['halaman']: 1);
$awladata = ($jmldataperhalaman * $halamanaktif) - $jmldataperhalaman;



  if(isset($_POST['cari'])){
    $menu = cari($_POST["keyword"],$awladata,$jmldataperhalaman);
}else{
  $menu = tampil("SELECT * FROM menu  LIMIT $awladata,$jmldataperhalaman");
}

  // var_dump($pakaian);die();

  if (isset($_POST["hapus"])){
    if(hapus_data($_POST) > 0){
        echo"
             <script>
                 alert('data berhasil dihapus');
                 document.location.href =    'admin.php';
             </script>
         ";
    }else{
         echo"
             <script>
                 alert('data gagal dihapus');
                 document.location.href = 'admin.php';
             </script>
          ";
    }
}

if (isset($_POST["kirim"])) {
  // var_dump($_FILES)
  if (tambah_data($_POST) > 0) {
      echo "
          <script>
          alert('Data Berhasil Ditambah');
          document.location.href = 'index.php';
          </script>
      ";
      
  }else{
     echo "
          <script>
          alert('Data Gagal Ditambah');
          document.location.href = 'index.php';
          </script>
      ";
  }
}

 // var_dump($pakaian);die();
 if (isset($_POST["edit_menu"])){
    if(edit($_POST) > 0){
        echo"
             <script>
                 alert('data berhasil ditambahkan');
                 document.location.href = 'admin.php';
             </script>
         ";
    }else{
         echo"
             <script>
                 alert('data gagal ditambahkan');
                 document.location.href = 'admin.php';
             </script>
          ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>

<style>
  .pagination {
    margin-left: auto;
    margin-right: auto;
  }
</style>

<body>
  <div class="container mt-5">
    <?php
      if(isset($_GET['status'])){
        if($_GET['status'] == 1){
          echo "<div class='alert alert-success'>data berhasil ditambahkan</div>";
        }
        else if($_GET['status'] == 2){
          echo "<div class='alert alert-success'>data berhasil diedit</div>";
        }
        else if($_GET['status'] == 3){
          echo "<div class='alert alert-danger'>data gagal diedit</div>";
        }
        else if($_GET['status'] == 4){
          echo "<div class='alert alert-success'>data berhasil diHapus</div>";
        }
        else if($_GET['status'] == 5){
          echo "<div class='alert alert-danger'>data gagal diHapus</div>";
        }
      }
    ?>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-between">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="container" action="" method="post" enctype="multipart/form-data">

                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="nama" class="form-label">nama :</label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama anda"
                        required>

                    </div>
                    <div class="mb-3">
                      <label for="detail" class="form-label">detail :</label>
                      <input type="text" name="detail" class="form-control" id="detail"
                        placeholder="Masukkan detail anda" required>

                    </div>
                    <div class="mb-3">
                      <label for="kategori" class="form-label">kategori :</label>
                      <input type="text" name="kategori" class="form-control" id="kategori"
                        placeholder="Masukkan kategori anda" required>
                    </div>
                    <div class="mb-3">
                      <label for="harga" class="form-label">harga :</label>
                      <input type="text" name="harga" class="form-control" id="harga" placeholder="Masukkan harga anda"
                        required>

                    </div>
                    <div class="mb-3">
                      <label for="foto" class="form-label">foto</label>
                      <input class="form-control" type="file" name="foto" id="foto">
                    </div>
                    <div class="mb-3">
                      <button class="btn btn-success" type="submit" name="kirim">Tambah Data</button>
                    </div>
                  </form>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="d-flex">
        <form class="d-flex" action="" method="post">
          <input name="keyword" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button name="cari" class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <a href="loguot.php"
          style="background-color:blue; color:white; text-decoration:none;padding:10px;border-radius:5px;"
          class="ms-5">Logout</a>
      </div>
    </div>
    <table class="table table-bordered table-striped mt-5">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">gambar</th>
          <th scope="col">nama</th>
          <th scope="col">deskripsi</th>
          <th scope="col">kategori</th>
          <th scope="col">harga</th>
          <th scope="col">aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $j = $awladata;
        foreach ($menu as $i => $mn) :
    ?>
        <tr>
          <td><?= $j+1?></td>
          <td><img src="images/<?= $mn['foto'] ?>" alt="" width="50px"></td>
          <td><?= $mn['nama'] ?></td>
          <td><?= $mn['detail'] ?></td>
          <td><?= $mn['kategori'] ?></td>
          <td><?= $mn['harga'] ?></td>
          <td>
            <button type="button" class="btn btn-light bg-success" id="daftar" data-bs-toggle="modal"
              data-bs-target="#modal<?= $mn['id']; ?>">edit</button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal<?= $mn['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data">
            <?php 
                                $id =  $mn['id']; 
                                $edit_menu = query("SELECT * FROM menu WHERE id = $id");
                                ?>
            <input type="hidden" name="id" value="<?= $id;?>">

            <?php foreach ($edit_menu as $edit_mn):?>
            <input type="hidden" name="fotolama" value="<?= $edit_mn['foto'];?>">

            <div class="mb-3">

              <label for="gambar" class="form-label ">gambar</label>
              <input type="file" name="foto" class="form-control" id="gambar" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">nama</label>
              <input type="text" name="nama" class="form-control" value="<?= $edit_mn['nama'];?>" id="nama">
            </div>
            <div class="mb-3">
              <label for="detail" class="form-label">detail</label>
              <input type="text" name="detail" class="form-control" value="<?= $edit_mn['detail'];?>" id="detail">
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label">kategori</label>
              <input type="text" name="kategori" class="form-control" value="<?= $edit_mn['kategori'];?>" id="kategori">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">harga</label>
              <input type="text" name="harga" class="form-control" value="<?= $edit_mn['harga'];?>" id="harga">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
          <button type="submit" name="edit_menu" class="btn btn-dark">Kirim</button>
        </div>
        <?php endforeach ?>
        </form>
      </div>
    </div>
  </div>
  <a href="hapus.php?id=<?= $mn['id'] ?>" class="btn btn-danger">Hapus</a>
  </td>
  </tr>
  <?php
  $j++;
      endforeach
    ?>
  </tbody>
  </table>
  </div>

  <div class="pagination justify-content-center">
    <?php if($halamanaktif >  1) :?>
    <a href="?halaman=<?= $halmanaktif - 1; ?>">
      <h3>&lt;</h3>
    </a>
    <?php endif; ?>

    <?php for( $i = 1; $i <= $jumlahhalaman; $i++):?>
    <?php if($i == $halamanaktif) : ?>
    <a class="ms-3" href="?halaman=<?= $i; ?>" style="font-weight:bold; color:red;">
      <h3><?= $i; ?></h3>
    </a>
    <?php else : ?>
    <a class="ms-3" href="?halaman=<?= $i; ?>">
      <h3><?= $i; ?></h3>
    </a>
    <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanaktif  <  $jumlahhalaman) :?>
    <a class="ms-3" href="?halaman=<?= $halmanaktif + 1; ?>">
      <h3>&gt;</h3>
    </a>
    <?php endif; ?>
  </div>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>