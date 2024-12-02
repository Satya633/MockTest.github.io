<html lang="en">
<head>
<title>Selection Page</title>
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
.content1{
    width: 900px;
    height: 30vh;
    margin: auto;
    color: #fff;
    position:relative;
}
.content1 .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

 .content1 h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}
 .content1 .cn{
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

.content1 .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

 .content1  span{
    color: #ff7200;
    font-size: 65px
}
.btnn{
    width: 280px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 20px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}


@media (min-width: 768px) and (max-width: 1200px) {
    .content1 {
        width: 80%;
        margin: auto;
        text-align: center;
    }
    .btnn {
        width: 200px;
        font-size: 18px;
    }
    .choice h2 {
        font-size: 24px;
    }
}

/* Styles for Tablets and Smaller Laptops (Below 768px) */
@media (max-width: 768px) {
    .content1 {
        width: 90%;
        margin: auto;
        text-align: center;
    }
    .btnn {
        width: 180px;
        font-size: 16px;
    }
    .choice h2 {
        font-size: 20px;
    }
    .navbar ul {
        flex-direction: row;
        text-align: center;
    }
    .navbar{
        margin: 10px 0;
    }
ul li {
        margin-left: 20px ;
    }

}

/* Styles for Mobile Devices (Below 500px) */
@media (max-width: 500px) {
    .content1 {
        width: 95%;
        margin: auto;
        text-align: center;
        padding: 10px;
    }
    .choice h2 {
        font-size: 18px;
        margin-bottom: 15px;
    }
    .btnn {
        width: 150px;
        font-size: 14px;
        padding: 10px;
        margin: 10px 5px;
    }
    .navbar {
        flex-direction: column;
        align-items: center;
    }
    .navbar ul li {
        margin: 5px 0;
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
         <li><a href="index.php">HOME</a><li>
            <li><a href="about.html">ABOUT</a><li></li>
            <li><a href="services.html">SERVICE</a><li></li>
            <li><a href="contact.html">CONTACT</a><li></li>
            </UL>
        </div>
<br><br>
            </div>
<br>
<br>
<br>
<br>
<br>
  <center>          <div class="content1">
              <div class="choice">
               <h2 >CHOOSE SUBJECT TYPE:
               </h2>
               
<input type="button" value="CORE" class="btnn" onclick="core()"/>&nbsp;&nbsp;&nbsp;

<input type="button" value="GENERAL" class="btnn" onclick="general()"/>
              
               </div>
          
</center>
<center>          <div class="content1">
              <div class="choice">
               <h2 >MOCK TESTS:
               </h2>
               
<input type="button" value="MOCK-TEST" class="btnn" onclick="MT()"/>
              
               </div>
          
</center>
  </div>
            </body>
<script>
function core()
{
window.location="course.html"
}
function MT()
{
window.location="mti.html"
}
function general()
{
window.location="general.html"
}
</script>

            </html>