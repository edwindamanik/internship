<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

  <!-- Boostrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <title>Cetak Ganjil Genap</title>
</head>

<body>
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <form class="col-12" method="POST">
        <div class="form-group">
          <h4>Cetak Angka Ganjil Genap</h4>
        </div>
        <div class="form-group">
          <label>Bilangan Batas Awal</label>
          <input type="number" name="bil1" class="form-control">
        </div>
        <div class="form-group">
          <label>Bilangan Batas Akhir</label>
          <input type="number" name="bil2" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="form-control btn-success">Periksa</button>
        </div>
      </form>   
    </div>  

    <div>
      <!-- Hasil Cetak Ganjil Genap -->
    </div>
  </div>
</body>

</html>
