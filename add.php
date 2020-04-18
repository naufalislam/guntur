<?php 
// koneksi database
include 'koneksi.php';

if(isset($_POST['simpan'])){
    // menangkap data yang di kirim dari form
    
    $cashier = $_POST['cashier'];
    $product = $_POST['product'];
    $category = $_POST['category'];
    $prince = $_POST['prince'];
   

    if(empty($cashier)){
        echo "<p style='color:red'>Cashier tidak boleh kosong!</p>";
    }elseif(empty($product)){
        echo "<p style='color:red'>Product tidak boleh kosong!</p>";
    }
    else if(empty($category)){
        echo "<p style='color:red'>Category tidak boleh kosong!</p>";
    }
    else if(empty($prince)){
        echo "<p style='color:red'>Prince boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($koneksi,"insert into product (`cashier`, `product`, `category`, `prince`) 
    values('$cashier','$product','$category','$prince')");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }
}
?>