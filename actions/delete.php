<?php 
    $id = $_GET['id'];
    include('cn.php'); // for connectoin ..
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($cn,$query) or die('cant run query');
    $error = "User Deleted Successfully";
    header('LOCATION:../home.php?murad='.$error);
?>