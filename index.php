<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD | Tabel Siswa</title>

  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- font API -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- css -->
  <style>
    body{
      background-color: darkslateblue;
      font-family: 'Montserrat', sans-serif;;
    }
  </style>
</head>
<body>

  <!-- header page -->
  <header class="container mt-4">
    <div class="card border-0 shadow">
      <div class="card-body">
        <h3>CRUD with PHP</h3>
        <p>Syahrandy Waskito</p>
      </div>
    </div>
  </header>

  <!-- content (table) -->
  <section class="container mt-4">
    <div class="card shadow border-0">
      <div class="card-body">

        <a href="add_page.php" class="btn btn-primary btn-md">Tambah Data Baru</a>

        <?php
        require("model/connection.php");
        $data_siswa = mysqli_query($connect, "SELECT * FROM siswa");
        $data_array = mysqli_fetch_array($data_siswa);
        if (empty($data_array)) {
        ?>
          <div class="alert alert-danger mt-2">
            Tabel Masih Kosong !!
          </div>
        <?php  
        }
        ?>
        <div class="mt-3">
          <table class="table table-bordered">
            <tr class="text-center">
              <th>ID</th>
              <th>Nama</th>
              <th>Jenis kelamin</th>
              <th>Alamat</th>
              <th>Option</th>
            </tr>
      
            <?php
              foreach ($data_siswa as $row) {
            ?>
               <tr>
                  <td class="text-center"><?= $row['ID'] ?></td>
                  <td><?= $row['Nama'] ?></td>
            <?php
                if ($row['Jenis_kelamin'] == 0) {
                  echo "<td>Laki-laki</td>"; 
                }        
                else {
                  echo "<td>Perempuan</td>";
                }
            ?>
                  <td><?=$row['Alamat']?></td>
                  <td class="text-center">
                      <a href="<?php echo "update_page.php?ID=$row[ID]"?>" class="btn btn-success btn-md">Update</a> 
                      <a onclick="return confirm('Apakah anda ingin menghapus data ini ?')" href="<?php echo "controller/delete.php?ID=$row[ID]"?>" class="btn btn-danger btn-md">Delete</a>
                  </td>

                </tr>
            <?php 
              }
            ?>
          </table>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>