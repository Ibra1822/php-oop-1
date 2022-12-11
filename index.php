<?php
require './class/category.php';
require './class/Movie.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <title>php-oop-1</title>
</head>
<body>
<div class="container text-center" >
  <h1>LIST MOVIES</h1>
</div>

<div class="container ib-cont">

<?php foreach($movies as $movie): ?>
<div class="ib-card">

<div class="cont-img">
  <img src="<?php echo $movie -> pic ?>" alt="">
</div>
<div class="cont-text">
  <h2><?php echo $movie -> title ?></h2>
  <h2><?php echo $movie -> protagonist ?></h2>
  <div class="<?php echo $movie -> ageVisible() ?>"></div>
  <p><?php echo $movie -> country ?></p>
  <h3><?php echo $movie -> category ->  secondType .',' ; echo $movie -> category ->  type ?></h3>
</div>

</div>

<?php endforeach; ?>

</div>


</body>
</html>