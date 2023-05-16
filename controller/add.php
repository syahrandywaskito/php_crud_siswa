<?php

require("../model/connection.php");

$name = $_POST['name'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO siswa SET
          Nama = '$name',
          Jenis_kelamin = '$jenis_kelamin',
          Alamat = '$alamat'";

mysqli_query($connect, $query);
header("location: ../index.php");