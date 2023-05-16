<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD | Add Page</title>

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
        <h3>Add Page</h3>
      </div>
    </div>
  </header>

  <section class="container mt-4">
    <div class="card border-0 shadow">
      <div class="card-body">
        <form action="controller/add.php" method="post">
          <label for="name" class="form-label fw-semibold">Nama</label><br>
          <input type="text" name="name" id="name" class="form-control">
          <br>
          <label class="form-label fw-semibold">Jenis Kelamin</label><br>
          <input type="radio" name="jenis_kelamin" id="laki-laki" value="0" class="form-check-input">
          <label for="laki-laki" class="form-check-label">
            Laki-laki
          </label>
          <input type="radio" name="jenis_kelamin" id="perempuan" value="1" class="form-check-input">
          <label for="perempuan" class="form-check-label">
            Perempuan
          </label>
          <br><br>
          <label for="alamat" class="form-label fw-semibold">Alamat</label><br>
          <textarea name="alamat" id="alamat" cols="40" rows="5" class="form-control"></textarea>
          <br>
          <button type="submit" class="btn btn-primary btn-md">Submit</button>
          <button type="reset" class="btn btn-warning btn-md">Reset</button>
          <button type="cancel" class="btn btn-danger btn-md">Cancel</button>
        </form>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>