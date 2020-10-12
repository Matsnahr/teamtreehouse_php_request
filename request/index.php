<?php

include "connection.php";

$siswa=$db->query("select * from siswa");
$data_siswa=$siswa->fetchAll();

foreach ($data_siswa as $key) {
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>coba</title>
</head>
<body>
    <div class="container">
        <h1>Form Regeristrasi</h1>
        <div class="row">
            <div class="border border-secondary">
                <h3>Nama Siswa</h3>
        <div class="col">
        <form action="input.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Siswa</label>
                <input type="text" name="nama" class="form-control">
            <div class="form-group">
                <label for="exampleInputEmail1">kelas</label>
                <input type="text" name="pekerjaan" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        
            <div class="container">
        <h3>Tambah Tim</h3>
    <div class="row">
        <!-- <div class="border border-secondary">/ -->
        <div class="col">
        <form action="input.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Tim</label>
                <input type="text" name="nama" class="form-control">
            <button type="submit" class="btn btn-primary">Simpan</button>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>