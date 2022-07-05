<?php
   $conn = mysqli_connect('localhost','root','','catering');
   if (mysqli_connect_errno()) {
       echo "Gagal  : " . mysqli_connect_error();
   }

   function query($query){
       global $conn;
       $result = mysqli_query($conn, $query);
       $rows = [];
       while ($row = mysqli_fetch_assoc($result)){
           $rows[] = $row;
       }
       return $rows;
   }
    
   function tambah_data ($data) {
        global $conn; 

        $foto = unggah($_FILES);
        $nama = stripslashes($data["nama"]);
        $harga = stripslashes($data["harga"]);
        $kategori = stripslashes($data["kategori"]);
        $detail = stripslashes($data["detail"]);
        

        //tambahkan file ke database
        mysqli_query($conn, "INSERT INTO menu VALUES('','$foto','$nama','$harga','$kategori','$detail')");
        return mysqli_affected_rows($conn) ;
    }

    function unggah($files){
        
        $nama_gambar = $files["foto"]["name"];
        $error = $files["foto"]["error"];
        $tmp = $files["foto"]["tmp_name"];
        $format = explode(".",$nama_gambar);
        $format = strtolower(end($format));

        if($error === 4){
            return false;
        }

        $nama_gambar = date("ymdisa").".".$format;
        // var_dump($tmp);var_dump('images/'.$nama_gambar);die();
        move_uploaded_file($tmp,"images/".$nama_gambar);

        return $nama_gambar;
        
    }

    function tampil($query){
        global $conn;
    
        $result = mysqli_query($conn, $query);
    
        // $data = (mysqli_fetch_assoc($result));
    
        // $rows = [];
        
        while($data = mysqli_fetch_assoc($result)){
    
            $rows[] = $data;
        }
    
        return $rows;
    }

    function hapus_data($data) {
        global $conn;
        $id = $data;
        mysqli_query($conn, "DELETE FROM menu WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function edit($data){
        global $conn;

        $id = $data['id'];

       $fotolama = $data["fotolama"];

       if($_FILES['foto']['error'] === 4){
           $foto = $fotolama;

       }else{
           $foto = uploadimg();
       }
      
       
        $nama = stripslashes($data["nama"]);
        $harga = stripslashes($data["harga"]);
        $kategori = stripslashes($data["kategori"]);
        $detail = stripslashes($data["detail"]);
        

        //update 
        $query = "UPDATE menu SET
                foto = '$foto',
                nama = '$nama',
                harga = '$harga',
                detail = '$detail',
                kategori = '$kategori'
                WHERE id = $id";

        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

    }

    function uploadimg(){

        $nameFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto'] ['tmp_name'];

        //cek apakah tidak ada foto yang diupload
        if ($error === 4){
            echo "<script>
                    alert('pilih foto terlebih dahulu');
                    </script>";

                    return false;
        }

        //pastikan yang diupload adalah foto

        $ekstensiGambarValid = ['jpeg','jpg','png'];
        $ekstensiGambar = explode('.',$nameFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo"<script>
                    alert('yang diupload bukan gambar !');
                </script>";

            return false;
        }

        //cek jika ukuran terlalu besar
        //if ($ukuranFile > 2500000){
            //echo"<script>
                //alert('ukuran gambar terlalu besar);
                //</script>";

          //  return false;
        //}

        //lolos pengecekan , gambar siap diupload
        //ubah nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }
    function cari($keyword,$a,$b){
        $query = "SELECT * FROM menu WHERE nama LIKE '%$keyword%' OR harga LIKE '%$keyword%'  LIMIT $a,$b";
        return query($query);
    }
    function boya($keyword){
        $query = "SELECT * FROM menu WHERE nama LIKE '%$keyword%' OR harga LIKE '%$keyword%'";
        return query($query);
    }
    
?>