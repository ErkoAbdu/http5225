<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
    <?php
        function getUsers(){
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }
        $users = getUsers();
        //name
        //username
        //email
        //address
        // echo '<pre>';
        // echo print_r($users);
        // echo '</pre>';
        
        
        for($i = 0; $i < count($users); $i++){
                echo '<div class="col-lg-3 col-md-4">
                       <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                            <p class="card-text">' . $users[$i]['username'] . '</p>
                            <p class="card-text">Email: <a class="link-opacity-100" href="#">'. $users[$i]['email'] . '</a></p>
                            <p class="card-text">' . $users[$i]['address']['street'] . '</p>
                            <p class="card-text">' . $users[$i]['address']['suite'] . '</p>
                            <p class="card-text">' . $users[$i]['address']['city'] . '</p>
                            <p class="card-text">' . $users[$i]['address']['zipcode'] . '</p>
                            <a href="#" class="btn btn-primary">This Button Does Nothing</a>
                        </div>
                    </div></div>';
        }
    ?>
    </div>
</div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>