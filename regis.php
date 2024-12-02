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