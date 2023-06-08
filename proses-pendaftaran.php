<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $isbn = $_POST['isbn']; 
    $judul = $_POST['judul']; 
    $kategori = $_POST['kategori'];
    $tahun = $_POST['tahun'];

    $sql = "INSERT INTO buku (isbn, judul_buku, kategori, tahun_terbit) 
    VALUE ('$isbn', '$judul', '$kategori', '$tahun')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    }else {
        header('Location: index.php?status=gagal');
    }
 }else {
    die("Akses dilarang...");
 }
?>