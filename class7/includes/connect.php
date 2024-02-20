<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
    if(!$connect){
        die("COnnection Failed: " . mysqli_connect_error());
    }
?>