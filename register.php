<!DOCTYPE html>
<html>
<head>
	<title>Registertion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
{
  box-sizing: 10px;
}

body {
  margin: 0;
}
        
        /*------------------- background ----------------------*/   
body {
  background: #770d0d; /* fallback for old browsers */}  

    
    
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
    
    

.header {
  background-color:#f7a8a8;
  padding: 10px;
  font: Serif;
  text-align: center;
  color: #000000;
}
  
/*--------------------TopBar-----------------*/
  /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #d36666;
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
  background-color: #f7a8a8;
  color: black;
}



#frm{
	
	color:wheat;
	text-align: center;
	top: 0px;
	height: 35%;
	width: 100%;
	 position:relative;
  /*z-index: 2;*/
  background: #d36666;
  max-width: 360px;
  margin: 50px auto 100px;
  padding: 30px;
  }
    
.textField{
	margin-top: 2px;
	height: 28px;
	border: 1px solid #5E6E66;
	font-size: 16px;
	padding: 1px;
	width: 100%;
}
//*#error_msg{
	width: 50%;
	margin: 5px auto;
	height: 30px;
	border: 1px solid #FF0000;
	background: #FFB9B8;
	color: #FF0000;
	text-align: center;
	padding-top: 10px;
}*/
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
td{
	text-align: right;
  }
    
    /*Sign in*/    
    
.buttonex2 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#770d0d  ;
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
  background-color:#770d0d  ;
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

  


    
    </style>
</head>

    
    
<body>
    
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
    
    
    
         <a href="register.php" target="_self">
            <button class="buttonex2" style="vertical-align:middle">Sign In</button> 
        </a>
        
        <a href="pro.php" target="_self">
            <button class="buttonex3" style="vertical-align:middle">Log In</button> 
        </a>
		
    
    <div id="frm">
			
			<form method="post" action="process.php"> 
				
				
				<table>
					<tr>
						<td>username:</td>
						<td><input type="text" name="username" class="textInput" required></td>
					</tr>
					<tr>
						<td>email:</td>
						<td><input type="email" name="email" class="textInput" required></td>
					</tr>
					<tr>
						<td>password:</td>
						<td><input type="password" name="password" class="textInput" required></td>
					</tr>
					<tr>
						<td>Password confirm: </td>
						<td><input type="password" name="password2" class="textInput" required></td>
					</tr>
					<tr>
						<td>phone:</td>
						<td><input type="text" name="phone" class="textInput" required></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="register_btn" value="Register"></td>
					</tr>
					<tr>
  						Already a member? <a href="pro.php">Sign in</a>
  					</tr>
				</table>
			</form>
		</div>
   

</body>

</html>