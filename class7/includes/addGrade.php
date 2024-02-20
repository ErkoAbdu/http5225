<?php
    if(isset($_POST['grades'])){
    // print_r($_POST);
    // Array ( [fname] => erko [lname] => abdurahman [marks] => 99 [imageURL] => nothing )
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    //Connection String
    include('../includes/connect.php');
    $query = "INSERT INTO students (fname, lname, marks, imageURL) 
                VALUES (
                    '" . mysqli_real_escape_string($connect, $fname) . "',
                    '" . mysqli_real_escape_string($connect, $lname) . "',
                    '" . mysqli_real_escape_string($connect, $marks) . "',
                    '" . mysqli_real_escape_string($connect, $imageURL) . "')";

    $student = mysqli_query($connect, $query);

    if($student){
        echo "Success";
    }else{
        echo "Failed" . mysqli_error($connect);
    }
    }else{
        echo "You shouldnt be here";
    }
?>




    
