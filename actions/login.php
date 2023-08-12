<?php 
    $email = $_GET['email']; // For email ..
    $password = $_GET['password']; // password ..
    include('cn.php'); // shamil ..
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('Cant ur query for find email');
    $row = mysqli_num_rows($result); // num of rows ..
    if($row > 0){
        // Sessions ..
        // fetch data from database ..
        $r = mysqli_fetch_array($result); // this function converted variable into array ..
        session_start(); // function ..
        $_SESSION['user'] = $r['fname'];
        // fetching ..
        Header('Location:../home.php');
    } else {
        $error = "Email or password is wrong! Try Again";
        header('Location:../index.php?murad='.$error);
    }
?>