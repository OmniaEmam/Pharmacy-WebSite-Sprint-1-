<!DOCTYPE html>
<html>
    <body> 
        <head>
 <!---------------------------Head------------------------------------------->
<title>Feed Back</title>
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
  background-color:#ccedd2;
  padding: 10px;
  font: Serif;
  text-align: center;
  color: #000000;
}

    
/*--------------------TopBar-----------------*/
  /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #94d3ac;
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
  background-color: #7fcd91;
  color: black;
}

 /*------------------- background ----------------------*/   
body {
  background: #004445; /* fallback for old browsers */}  

    
    
h2{
    color: #004445;
    text-align: center;
    margin-right: 20px;
    } 
    
    h3{
    font-size: 100;    
    color: #004445;
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
        color: #004445
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
  background: #94d3ac;
  max-width: 360px;
  margin: 50px auto 100px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #ccedd2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
/*-----------------------ÒÑÇÑ Çá Login----------------------------*/
input[type=submit] {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #004445;
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
  background: #4B0082;
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
     <a href="#">Feedback</a>
     <a href="#">Log Out</a>
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
    <div class="Emp"> <h2>Feedback</h2> </div>

    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


        <div class="Name"> E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        </div>
  <br><br>
 
        <div class="Name"> Feedback: <textarea name="comment" class="feed" rows="5" cols="40"><?php echo $feedback;?></textarea></div>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>
        </div>

</body>
</html>