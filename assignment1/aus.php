<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MotoGP Grid 2024</title>
  <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a class="d-flex align-items-center mb-3 mb-md-0 link-body-emphasis text-decoration-none pb-2" href="/">
    <span class="fs-4 justify-content-center">MotoGP Grid 2024</span>
  </a>
  <ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="index.php" aria-current="page">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="it.php">Italian Riders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sp.php">Spanish Riders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fra.php">French Riders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="aus.php">Australian Riders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sa.php">South African Riders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="por.php">Portuguese Riders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="jap.php">Japanese Riders</a>
    </li>
  </ul>
</header>
  <?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
    $query = 'SELECT riders_table.fname, riders_table.lname, riders_table.team, riders_table.nationality, manufacturer_table.manufacturer_name, imageURL
    FROM riders_table 
    JOIN manufacturer_table  ON riders_table.manufacturer_id = manufacturer_table.id
    WHERE riders_table.nationality = "Australia"';

    $riders= mysqli_query($connect, $query);

    if(mysqli_connect_error()){
      die("Connection error: " . mysqli_connect_error());
    }
  ?>
  <div class="container">
    <div class="row">
      <?php
        foreach ($riders as $rider){
          echo 
            '<div class="col-md-4 mb-3">
              <div class="card" style="width: 18rem;">
                <img src="'. $rider['imageURL'] . '" class="card-img-top" alt="MotoGP rider">
                <div class="card-body">
                  <h5 class="card-title">'. $rider['fname']. ' ' . $rider['lname'].'</h5>
                  <p class="card-text"><strong>Team</strong>: '. $rider['team'] .'</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><strong>Nationality</strong>: '. $rider['nationality'] .'</li>
                  <li class="list-group-item"><strong>Manufacturer</strong>: '. $rider['manufacturer_name'] .'</li>
                </ul>
              </div>
            </div>';
        }
      ?>
    </div>
  </div>
</body>
</html>