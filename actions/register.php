<?php
    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $cemail = $_POST['cemail'];
    $password = $_POST['password'];
    $gender = $_POST['gender']; 
    // double equal used for comparison ..
    if($email == $cemail){
        // mysqli('hostname','username','password','database');
        include('cn.php');
        $q  = "SELECT * FROM `users` WHERE email='$email'"; // for get data ..
        $result = mysqli_query($cn,$q) or die('Cant ur query for find email');
        $row = mysqli_num_rows($result);
        if($row > 0){
            $error = "Email Already Exist";
            header('Location:../register.php?murad='.$error);
        } else {
             // Step 2 -- Query Writting .. for insert data ..
            $query = "INSERT INTO `users`(fname,email,password,gender) VALUES ('$fullname','$email','$password','$gender')";
            // Step 3: Query Run 
            mysqli_query($cn,$query) or die('Cant Connect With Database Table');
            // Header is used for change location ...
            header('Location:../index.php');
        }
       
    } else {
        header('Location:../register.php');
    }
?>