<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitung Huruf Vokal</title>
  <style>
    * {
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  <div style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align: center;">
    <div style="padding:35px; border:0.5px solid #ccc">
      <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <h3>Mesin Hitung Huruf Vokal</h3>
        <input type="text" name="teks" style="border:0.2px solid gray; padding:8px; border-radius:5px; width:100%;">
        <button type="submit" style="padding:8px; margin-top:10px; width:100%; background:none;">Cek</button>
      </form>
      <div style="margin-top:10px; background: gray; color: white; padding: 8px">
        <?php 
          if($_SERVER["REQUEST_METHOD"] == "POST") {
            $teks = $_POST["teks"];
            $string = str_split($teks);
            $hurufVokal = ['a', 'i', 'u', 'e', 'o'];

            $x = array_intersect($hurufVokal, $string);
            $count = count($x);
            echo $teks." = ".$count." yaitu ";
            foreach($x as $subjek) {
              echo $subjek. " ";
            }
          }
        ?>
      </div>
    </div>
  </div>
</body>

</html>