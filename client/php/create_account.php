<?php

    session_start();

    if(isset($_POST['create_account'])) {
        include("db_connect.php");
        
        $first=$_POST['first'];
        $last=$_POST['last'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password = sha1($password);
        $url = '../img/default-account.jpg';
        $method = 1;
        $google = 0;
        $facebook = 0;
        
        $sql = "INSERT INTO dreamslogin (first,last,email,pass,url,method,google,facebook) VALUES('$first','$last','$email','$password','$url','$method','$google','$facebook')";
        mysqli_query($connection, $sql);
        
        $_SESSION['logged_in'] = true;
        $_SESSION['first'] = $first;
        $_SESSION['last'] = $last;
        $_SESSION['email'] = $email;
        $_SESSION['url'] = $url;
		
		echo "success";
        
        exit();
    } 
?>