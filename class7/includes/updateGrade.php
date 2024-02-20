<?php
    if(isset($_POST['updateStudent'])){
    // print_r($_POST);
    // Array ( [fname] => erko [lname] => abdurahman [marks] => 99 [imageURL] => nothing )
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    //Connection String
    include('../includes/connect.php');
    $query = "UPDATE students SET fname='$fname', lname='$lname', marks='$marks', imageURL='$imageURL' WHERE id = '$id'";

    $student = mysqli_query($connect, $query);

    if($student){
        header("Location: ../index.php");
    }else{
        echo "Failed" . mysqli_error($connect);
    }
    }else{
        echo "You shouldnt be here";
    }
?>