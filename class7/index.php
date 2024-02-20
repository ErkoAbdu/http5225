<?php 
       include('includes/functions.php');
       include('includes/connect.php');
      if(isset($_POST['login'])){
        $query = 'SELECT *
                FROM users
                WHERE email = "' . $_POST['email'] . '"
                AND password = "' . md5($_POST['password']) . '"
                LIMIT 1';
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result)){
          $record = mysqli_fetch_assoc($result);
          $_SESSION['id'] = $records['id'];
          header('Location: admin/index.php');
          die();
        }
        else{
          set_message('Incorrect username/password');
          header('Location: index.php');
          die();
        }
      }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
  <?php include("reusables/nav.php")?>
    <div class = "container">
        <div class = "row">
            <div class="col">
                <h1 class="display-3 mt-4 mb-4">Login</h1>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
          <form method="POST" action="">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email"class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
              <button type="submit" name="login" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="container">
            <div class="row">
            <?php
            
            ?>
            </div>
        </div>
    </div> 
</body>
</html>