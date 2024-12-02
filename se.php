<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=1951;
    $ans1 = $_POST["type1"];
    $ans2 = $_POST["type2"];
    $ans3 = $_POST["type3"];
    $ans4 = $_POST["type4"];
    $ans5 = $_POST["type5"];
    $ans6 = $_POST["type6"];
    $ans7 = $_POST["type7"];
    $ans8 = $_POST["type8"];
    $ans9 = $_POST["type9"];
    $ans0 = $_POST["type10"];
    
    $score = 0;
    if($ans1 == 2) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 2) $score++;
    if($ans0 == 1) $score++;
    
    $_SESSION['score'] = $score;
    

       $insertQuery = "INSERT INTO data(UID,ques1,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9,ques0) 
                    VALUES ('$phy','$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans0')";
    
    if ($conn->query($insertQuery) === TRUE) {
        echo "<script>
                window.onload = function() {
                    document.getElementById('form3').classList.add('open-form3');
                };
              </script>";
    } else {
        echo "ERROR: " . $conn->error;
    }
}
?>
<html>
<html>
<head>
<title>SOFTWARE-ENGINEERING/TEST</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
<script>
        function validateForm() {
            var radios = document.querySelectorAll('input[type="radio"]:checked');
            if (radios.length < 10) { 
                alert("Please answer all questions.");
                return false;
            }
            return true;
        }
    </script>
</head>
    <body class="color">
<div class="icon">
               <h2 class="logo">MOCK TEST</h2>
           </div>
                <div class="menu">
                   <ul> 
                    <li><a href="course.html">HOME</a><li></li>
                    <li><a href="about.html">ABOUT</a><li></li>
                    <li><a href="services.html">SERVICE</a><li></li>
                    <li><a href="contact.html">CONTACT</a><li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
        <center class="textcolor">  <h1 align="center">SOFTWARE-ENGINEERING - TEST:1/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="se.php" onsubmit="return validateForm()">
    <li>The attributes of good software among the following:</br>
        (a) Development&nbsp;&nbsp;&nbsp;(b) Functionality&nbsp;&nbsp;&nbsp;(c) Maintainability&nbsp;&nbsp;&nbsp;(d) Correctness</br>
        <ol type="A">
            <li><input type="radio" name="type1" value="1"> a, b, c only</li>
            <li><input type="radio" name="type1" value="2" id="satya"> b, c, d only</li>
            <li><input type="radio" name="type1" value="3"> a, b, d only</li>
            <li><input type="radio" name="type1" value="4"> a, c, d only</li>
        </ol><br>
    </li>

    <li>What does SDLC stand for?</br>
        <ol type="A">
            <li><input type="radio" name="type2" value="1"> System Design Life Cycle</li>
            <li><input type="radio" name="type2" value="2"> Software Design Life Cycle</li>
            <li><input type="radio" name="type2" value="3" id="satya1"> Software Development Life Cycle</li>
            <li><input type="radio" name="type2" value="4"> System Development Life Cycle</li>
        </ol><br>
    </li>

    <li>_________ is a software development life cycle model that is chosen if the development team has less experience on similar projects.</br>
        <ol type="A">
            <li><input type="radio" name="type3" value="1"> Iterative Enhancement Model</li>
            <li><input type="radio" name="type3" value="2"> RAD</li>
            <li><input type="radio" name="type3" value="3" id="satya2"> Spiral</li>
            <li><input type="radio" name="type3" value="4"> Waterfall</li>
        </ol><br>
    </li>

    <li>Which one of the following is not a software process quality?</br>
        <ol type="A">
            <li><input type="radio" name="type4" value="1"> Visibility</li>
            <li><input type="radio" name="type4" value="2"> Timeliness</li>
            <li><input type="radio" name="type4" value="3"> Productivity</li>
            <li><input type="radio" name="type4" value="4" id="satya3"> Portability</li>
        </ol><br>
    </li>

    <li>Which of the following documents contains the user system requirements?</br>
        <ol type="A">
            <li><input type="radio" name="type5" value="1"> SRD</li>
            <li><input type="radio" name="type5" value="2"> DDD</li>
            <li><input type="radio" name="type5" value="3"> SDD</li>
            <li><input type="radio" name="type5" value="4" id="satya4"> SRS</li>
        </ol><br>
    </li>

    <li>Which of the following testing is also known as white-box testing?</br>
        <ol type="A">
            <li><input type="radio" name="type6" value="1" id="satya5"> Structural testing</li>
            <li><input type="radio" name="type6" value="2"> Error guessing technique</li>
            <li><input type="radio" name="type6" value="3"> Design based testing</li>
            <li><input type="radio" name="type6" value="4"> Integration testing</li>
        </ol><br>
    </li>

    <li>Cyclomatic complexity is</br>
        <ol type="A">
            <li><input type="radio" name="type7" value="1" id="satya6"> White-box testing</li>
            <li><input type="radio" name="type7" value="2"> Black-box testing</li>
            <li><input type="radio" name="type7" value="3"> Grey-box testing</li>
            <li><input type="radio" name="type7" value="4"> Unit testing</li>
        </ol><br>
    </li>

    <li>The spiral model was originally proposed by</br>
        <ol type="A">
            <li><input type="radio" name="type8" value="1" id="sekhar7"> Barry Boehm</li>
            <li><input type="radio" name="type8" value="2"> Pressman</li>
            <li><input type="radio" name="type8" value="3"> Royce</li>
            <li><input type="radio" name="type8" value="4"> Jalote</li>
        </ol><br>
    </li>

    <li>__________ Phase chooses the data structure suitable for the application.</br>
        <ol type="A">
            <li><input type="radio" name="type9" value="1"> Procedural Design</li>
            <li><input type="radio" name="type9" value="2" id="sekhar8"> Data Design</li>
            <li><input type="radio" name="type9" value="3"> Architectural Design</li>
            <li><input type="radio" name="type9" value="4"> Module Design</li>
        </ol><br>
    </li>

    <li>Design Phase usually follows</br>
        <ol type="A">
            <li><input type="radio" name="type10" value="1" id="sekhar9"> Top-Down</li>
            <li><input type="radio" name="type10" value="2"> Bottom-Up</li>
            <li><input type="radio" name="type10" value="3"> Random</li>
            <li><input type="radio" name="type10" value="4"> End-End</li>
        </ol>
    </li>
</ol>

<center><input type="submit" class="satya" value="Complete" name="complete"/></center>
</form>



 <button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
<div class="form3" id="form3">
    <h2>Your Score:</h2>
    <h1>
        <span id="score">
            <?php
              
                if (isset($_SESSION['score'])) {
                    $score = $_SESSION['score'];
                    echo $score . '/10'; 

                    
                } else {
                    echo '0/10'; 
                    echo "<p>Better Luck Next Time</p>";  
                }
            ?>
        </span>
    </h1>
<?php
if ($score >= 8) {
                        echo "<p>Excellent!</p>";
                    } elseif ($score >= 5) {
                        echo "<p>Good!</p>";
                    } else {
                        echo "<p>Better Luck Next Time</p>";
                    }
?>
    <button class="ans" onclick="answer()">KEY</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="rem" onclick="closeform3()">OK</button>
</div></body>
   <script>
function answer()
{
window.location="sekey.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="se2.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>