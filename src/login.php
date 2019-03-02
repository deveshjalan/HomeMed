<?php
    //connect to database
    $db = mysqli_connect("localhost","phpmyadmin","phpmyadmin","homemed");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if(isset($_POST['login-btn'])) {
        session_start();
        $email = mysqli_real_escape_string($_POST['email']);
        $password = mysqli_real_escape_string($_POST['password']);
        //echo 'alert("done")';
        $sql = "SELECT * FROM users WHERE email=$email;";
        $result = mysqli_query($link,$sql);
        /*if($result = mysqli_query($link,$sql)) {
            $_SESSION['message'] = "you are logged in";
            $_SESSION['username'] = $username;
            header("location: pages/home/home.html");
        } */
    
        if ( false===$result ) {
            printf("error: %s\n", mysqli_error($con));
          }
          else {
            echo 'done.';
          }
          
    } 

?>

