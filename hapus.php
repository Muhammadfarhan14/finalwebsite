<?php
  require "function.php";

  $menu = tampil("SELECT * FROM menu");
  

  // var_dump($pakaian);die();

  if (isset($_GET["id"])){
    if(hapus_data($_GET['id']) > 0){
        echo"
             <script>
                 alert('data berhasil dihapus');
                 document.location.href = 'admin.php';
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

?>
