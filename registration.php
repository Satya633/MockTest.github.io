<html lang="en">
<head>
<title>Registration</title>
<link rel="stylesheet" href="">
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

.popup{
width: 340px;
height: 190px;
    left: 40%;
    font-family: sans-serif;
    text-align: center;
    color: black;
    font-size: 15px;
    background-color: #fff;
    border-radius:10px;
 transform: translate(0%,-5%);
    margin: -40px;
    padding: 8px;
    margin-top: -25%;
visibility:hidden;

}
.open-popup{
visibility: visible;
left:20%;
}

.popup img{
width:100px;
margin-top:-60px;
border-radius: 50%;
box-shadow: 0 5px 5px rgba(0,0,0,0.2);
}
.popup h2{
font-size: 38px;
font-weight: 500;
margin: 10px;
}
.popup p{
font-size: 15px;
}
.popup button{
 width: 80%;
height: 30px;
margin-top: 50px:
padding: 10px 0;
font-size : 18px;
background-color:#ff7200;
color: #fff;
border-radius: 8px;
cursor: pointer;
border:1;
 transition: 0.4s ease;
}
.popup button:hover{
    background: #fff;
    border-color: #000;
    color: #ff7200;
}

.form1 h2{
    width: 220px;
    left: 50%;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
    margin-top: 9%;
    

}

.form1 input{
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

.form1 input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}
@media (min-width: 1024px) {
    .content {
        width: 900px;
        height: 70vh;
    }
    .form1 {
        margin-top: 5%;
    }
    .navbar {
        width: 80%;
    }
}

/* Styles for tablets (768px to 1023px) */
@media (min-width: 768px) and (max-width: 1023px) {
    .content {
        width: 80%;
        height: auto;
        margin-top: 5%;
    }
    .navbar {
        width: 100%;
        padding: 0 20px;
    }
    .menu ul li {
        margin-left: 30px;
    }
    .popup {
        width: 90%;
        margin: auto;
        transform: translateY(-20%);
    }
}

/* Styles for mobile screens (up to 767px) */
@media (max-width: 767px) {
    .content {
        width: 90%;
        margin: auto;
        height: auto;
    }
    .form1 h2 {
        font-size: 18px;
        padding: 5px;
    }
    .form1 input {
        width: 90%;
    }
    .navbar {
        width: 100%;
        height: auto;
        flex-direction: column;
    }
    ul {
        flex-direction: row;
    }
    ul li {
        margin-left: 20px;
        margin-top: 30px;
    }
    .bt {
        width: 90%;
    }
    .popup {
        width: 80%;
        margin: auto;
        padding: 10px;
        transform: translateY(-20%);
    }
}
</style>
</head>
  <body class="color">
   
<div class="main">
 <div class="navbar">
<div class="icon">
<h2 class="logo">MOCK TEST</h2>
</div>
<div class="menu">
    <ul> 
         <li><a href="index.php">HOME</a><li>
            <li><a href="#">ABOUT</a><li></li>
            <li><a href="#">SERVICE</a><li></li>
            <li><a href="contact.html">CONTACT</a><li></li>
 </UL>
        </div>

<br>
<br>
            </div>
        
                        
            <div class="content" >
                
            
                
                    <center>   <div class="form1" ><form action="registration.php" method="post" onsubmit="openform2()">
                        
                        <h2>Registration</h2>
                        
                        <input type="text" name="useridr"
                        
                        placeholder="Enter UserName" id="n1"><br>
                        
                        <input type="email" name="emailr"
                        
                        placeholder="Enter Mail Id" id="e1"><br>
                        <input type="password" name="passwordr"
                         placeholder="Enter Password" id="p1"><br>

                        <input type="password" name="password"
                        placeholder="Confirm Password" id="p2"><br>
                        
                        <button class="bt" name="signup">           
                        Sign-In</button>                
                    </div></form>
                      <div class="popup" id="popup">
                        <img src="tick.png">       
                              <h2>THANK YOU!</h2>
<br>
                          <p>You Have Been Registered Succesfully!</p>
                        <br> <button onclick="choice()">Okay</button>
</div>
                                    </center>
 <?php

include 'connect.php';

if(isset($_POST['signup'])){
$username=$_POST['useridr'];
$Email=$_POST['emailr'];
$password=$_POST['passwordr'];
//$password=md5($password);

$checkEmail="SELECT * From registration where Email='$Email' ";
$checkUserN="SELECT * From registration where username='$username' ";
$result=$conn->query($checkEmail);
$result1=$conn->query($checkUserN);
if($result1->num_rows>0){
echo "<script>alert('UserName Already Taken !!');</script>";
}
else if($result->num_rows>0){
echo "<script>alert('Email Already Exists !!');</script>";
}
else {
$insertQuery="INSERT INTO registration(username,Email,password)
               VALUES ('$username','$Email','$password')";
               if($conn->query($insertQuery)==TRUE){
                 echo "<script>popup.classList.add('open-popup');</script>";
               }
               else{
                  echo "ERROR:".$conn->error;
               }
 }
}


?>

                                     </div>
</div>
            <script type="text/javascript"> 

 
                let popup = document.getElementById('popup')
        function openform2() {
var nil=0;
var n=document.getElementById("n1").value;  
var e=document.getElementById("e1").value;  
var p=document.getElementById("p1").value;  
var cp=document.getElementById("p2").value;
var letters = /^[A-Za-z0-9_]+$/;  
        var email_val = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(n==''||e==''||p==''||cp==''){  
alert("Enter each details correctly");  
}  
else if(!letters.test(n))  
        {  
            alert('INVALID Username must contain Alphabets and Numbers !');  
        }  
else if (!email_val.test(e))  
        {  
            alert('Invalid Email format Please Enter Valid Email !');  
        }  
else if(p!=cp)  
{  
alert("Passwords not Matching");  
}  
else if(document.getElementById("p1").value.length > 12)  
{  
alert("Password maximum length is 12");  
}  
else if(document.getElementById("p1").value.length < 6)  
{  
alert("Password minimum length is 6");  
}
else
{
  nil++;
} 
 
}</script>
<script>
function choice()
{ window.location="choice.php"
} 
            </script>
            </body>
            
            </html>
 
