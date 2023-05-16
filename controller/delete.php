<?php

require ("../model/connection.php");
$ID = $_GET['ID'];
$query = "DELETE FROM siswa WHERE ID = '$ID'";
mysqli_query($connect, $query);
header("location:../index.php");