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
      <a class="nav-link" href="aus.php">Australian Riders</a>
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
    <li class="nav-item">
      <a class="nav-link active" href="newRider.php">Add New Rider</a>
    </li>
  </ul>
</header>
    <div class = "container">
        <div class = "row">
            <div class="col">
                <h1 class="display-3 mt-4 mb-4">Add Rider</h1>
            </div>
        </div>
        <form action="includes/addRider.php" method="POST">
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname"aria-describedby="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname">
            </div>
            <div class="mb-3">
                <label for="team" class="form-label">Team</label>
                <input type="text" class="form-control" id="team" name="team" aria-describedby="team">
            </div>
            <div class="mb-3">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" aria-describedby="nationality">
            </div>
            <div class="mb-3">
                <label for="manufacturer_id" class="form-label">Manufacturer ID</label>
                <input type="number" class="form-control" id="manufacturer_id" name="manufacturer_id" aria-describedby="manufacturer_id">
            </div>
            <div class="mb-3">
                <label for="imageURL" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL">
            </div>
            <button type="submit" name="newRider" class="btn btn-primary">Submit</button>
        </form>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div> 
</body>
</html>