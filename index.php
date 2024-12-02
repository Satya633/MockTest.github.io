
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Test - Login Page</title>
    <link rel="stylesheet" href="">
    <link rel="icon" href="logo.png" type="image/x-icon">
<style>
*{
    margin: 0;
    padding: 0;
}
html, body {
    width: 100%;
    min-height: 100%;
    margin: 0;
    padding: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), 
                url('wel.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
}
.main {
    width: 100%;
    height: auto; 
    min-height: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), 
                url('wel.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed; 
}


.navbar{
    width: 900px;
    height: 75px;
    margin: auto;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}
.content{
    width: 1000px;
    height: 60vh;
    margin: auto;
    color: #fff;
    position:relative;
}
.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}
.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #ff7200;
    font-size: 65px
}

.form{
    width: 250px;
    height:360px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: relative;
    top: -320px;
    left: 900px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}
.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}
.bt{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.bt:hover{
    background: #fff;
    color: #ff7200;
}
.bt a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
@media screen and (max-width: 1200px) {
    .navbar {
        width: 100%;
        padding: 0 10px;
    }
    ul li {
        margin-left: 40px;
    }
    .content {
        width: 90%;
    }
    .form {
        left: auto;
        transform: translate(0%, 0%);
        margin: auto;
        top: -10px;
    }
}

@media screen and (max-width: 768px) {

    .main {
        background-size: 100% 350%;
        background-position: center top; 
    }
    .navbar {
        flex-direction: column;
        align-items: center;
        height: auto;
    }
    ul {
        flex-direction: row;
        margin: 10px 0;
    }
    ul li {
        margin-left: 20px ;
    }
    .content h1 {
        font-size: 36px;
    }
     .content span{
        font-size: 36px;
    }
    .content .par {
        font-size: 14px;
        line-height: 20px;
    }
    .form {
        width: 90%;
        padding: 15px;
        top: auto;
    }
    .form input, .bt {
        width: 100%;
    }
}

@media screen and (max-width: 480px) {
       .main {
         background-size: 100% 350%;
        background-position: center;
    }
    .logo {
        font-size: 24px;
        padding-left: 10px;
    }
    ul li {
        font-size: 12px;
    }
    .content h1 {
        font-size: 28px;
    }
    .content span{
        font-size: 28px;
    }
    .form {
        width: 95%;
        padding: 10px;
    }
    .form h2 {
        font-size: 18px;
    }
    .form input {
        font-size: 14px;
    }
    .bt {
        font-size: 16px;
    }
}

</style>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MOCK TEST</h2>
            </div>
            <div class="menu">
                <ul> 
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <h1>ECET<br><span>MOCK TEST FOR</span><br>CME</h1>
            <p class="par">In this website, we add the previous ECET papers and model questions. For ECET-based questions,you&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; can practice by signing in for free mock tests with subject-wise questions.</p>
            <br>
            <div class="form" id="form">
                <form method="post" action="index.php">
                    <h2>Sign In</h2>
                    <input type="text" name="usern" id="v" placeholder="Enter Username Here">
                    <input type="password" name="password" id="c" placeholder="Enter Password Here">
                    <button class="bt" name="signin" type="submit">Login</button>
                    <p class="link">Don't have an Account?<br><a href="registration.php">Sign Up</a> here</p>
                </form>
                            </div>
        </div>
    </div>
    <script>
    function validateForm() {
        var username = document.getElementById("v").value;  
        var password = document.getElementById("c").value;  
        
        if (username === '' || password === '') {
            alert("Enter Each Detail Correctly");
            return false;
        } else if (password.length > 12) {  
            alert("Password Maximum Length is 12");  
            return false;
        } else if (password.length < 6) {  
            alert("Password Minimum Length is 6");  
            return false;
        }
        return true;
    }
    </script>
</body>
</html>
