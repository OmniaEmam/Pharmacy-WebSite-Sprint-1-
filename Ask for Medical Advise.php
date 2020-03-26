<!DOCTYPE html>
<html>
    <body> 
        <head>
 <!---------------------------Head------------------------------------------->
<title>Ask Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

            
<style>
/*----CSS----*/
/*---------HEADER--------*/
{
  box-sizing: 10px;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color:aliceblue;
  padding: 10px;
  font: Serif;
  text-align: center;
  color: #000000;
}

    
/*--------------------TopBar-----------------*/
  /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #46b3e6;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #4d80e4;
  color: black;
}

 /*------------------- background ----------------------*/   
body {
  background: #2e279d; /* fallback for old browsers */} 
    
        /*Sign in*/    
    
.buttonex2 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#46b3e6  ;
  border: none;
  color:white;
  text-align: center;
  font-size: 20px;
  font-family: serif;
  padding: 10px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  top: 25px;
  left: 1100px;
}
    
.buttonex2 span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonex2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.buttonex2:hover span {
  padding-right: 25px;
}

.buttonex2:hover span:after {
  opacity: 1;
  right: 0;
}
    


/*Sign in*/    
    
.buttonex3 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#46b3e6  ;
  border: none;
  color:white;
  text-align: center;
  font-size: 20px;
  font-family: serif;
  padding: 10px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  top: 25px;
  left: 970px;
}
    
.buttonex3 span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonex3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.buttonex3:hover span {
  padding-right: 25px;
}

.buttonex3:hover span:after {
  opacity: 1;
  right: 0;
}

    
    
h2{
    color: #000000;
    text-align: center;
    margin-right: 20px;
    } 
    
    h3{
    font-size: 100;    
    color: #000000;
    text-align :left;
    margin-right: 200px;
    } 
    
    .form{
        text-align: center;
        margin-top: 50px;
        margin-right: 80px;
        margin-bottom: 20px;
    }
    
    .Name{
        color: #000000
    }
    
        .Emp
    {
        font-size: 20px;
        text-align: center;
        margin-left: 40px;
    }
    
    
    
/*Feed Back Form*/
.Feedback-page {
  width: 380px;
  padding: 30px;
  margin: auto;
}
    
.form {
  
  position:relative;
  z-index: 2;
  background: #46b3e6;
  max-width: 360px;
  margin: 50px auto 100px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: aliceblue;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
/*-----------------------زرار ال Login----------------------------*/
input[type=submit] {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #2e279d;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
input[type=submit]:hover;
input[type=submit]:active;
input[type=submit]:focus {
  background: #2e279d;
}
    
.buttonex1 {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #2e279d;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
    
}
    
    </style>
            </head>

      
<!-------------HTML---------------------->
<!------------Header------------------->
<div class="header">
  <h1>P H A R M A</h1>
</div>
 <!----------------TopBar----------------->
 <div class="topnav">
  <a href="#">Home</a>
  <a href="#">Store</a>
     <a href="#">Cart</a>
     <a href="Ask%20for%20Medical%20Advise.php">Ask Us</a>
     <a href="Feed%20back.php">Feedback</a>
</div>
<?php
        

        
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $feedback = "";
        
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["feedback"])) {
    $feedback = "";
  } else {
    $feedback = test_input($_POST["feedback"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="form">
    <div class="Emp"> <h2>Ask Us</h2> </div>

    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


        <div class="Name"> <h3>Enter Your Email</h3>  <input type="text" name="email" value="<?php echo $email;?>">
        </div>
  <br><br>
 
        <div class="Name"> <h3>Ask For a medical advise or any thing else</h3> <textarea name="comment" class="feed" rows="5" cols="40"><?php echo $feedback;?></textarea></div>
  <br><br>
        
</form>
    
     <div>
                    <a href="Thanks_AskUs.php" target="_self">
                     <button class="buttonex1" style="vertical-align:middle">Submit</button>   
                    </a>
        </div>
        </div>
        
        <a href="register.php" target="_self">
            <button class="buttonex2" style="vertical-align:middle">Sign In</button> 
        </a>
        
        <a href="pro.php" target="_self">
            <button class="buttonex3" style="vertical-align:middle">Log In</button> 
        </a>

</body>
</html>