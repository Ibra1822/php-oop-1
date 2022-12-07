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
  <h1 class="text-primary text-decoration-underline">LIST MOVIES</h1>
</div>

<div class="container">
  <table class="table table-primary text-primary ">
  <thead>
    <tr>
      <th scope="col">Titolo</th>
      <th scope="col">Protagonista</th>
      <th scope="col">Immagine</th>
      <th scope="col">Età</th>
      <th scope="col">Paese</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach($movies as $movie): ?>
      <tr>
       <td><?php echo $movie -> title ?></td>
       <td><?php echo $movie -> protagonist ?></td>
       <td><img src="<?php echo $movie -> pic ?>" alt=""></td>
       <td><div class="<?php echo $movie -> ageVisible() ?>" ></div></td>
       <td><?php echo $movie -> country ?></td>
       <td><?php echo $movie -> category ->  secondType .',' ; echo $movie -> category ->  type ?></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>

</div>


</body>
</html>