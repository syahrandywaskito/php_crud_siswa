<?php

require("../model/connection.php");
$id = $_POST['id'];
$name = $_POST['name'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "UPDATE siswa SET
          ID = '$id',
          Nama = '$name',
          Jenis_kelamin = $jenis_kelamin,
          Alamat = '$alamat'
          WHERE ID = '$id'";
mysqli_query($connect, $query);
header("location:../index.php");