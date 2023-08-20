<?php 
    $id = $_GET['id'];
    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender']; 
    include('cn.php');
    $query = "UPDATE `users` SET fname='$fullname', email='$email', password='$password',gender='$gender' WHERE id='$id'";
    mysqli_query($cn,$query) or die('Cant run query');
    $error = "User Updated Successfully";
    header('LOCATION:../home.php?msg='.$error);
?>