<?php
    include 'connect.php';

    if(isset($_POST['signin'])){
        $username = $_POST['usern'];
        $password = $_POST['password'];
        // $password = md5($password); // Uncomment for hashed password

        $alert = "<script>alert('NOT FOUND');</script>";
        $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
        $res = $conn->query($sql);

        if($res->num_rows > 0){
            session_start();
            $row = $res->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            header("Location: choice.php");
            exit();
        } else {
            echo $alert;
        }
    }
    ?>
