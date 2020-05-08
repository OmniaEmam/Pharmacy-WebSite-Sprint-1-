<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
     <a href="#">Feedback</a>
     <a href="#">Log Out</a>
</div>
    <div id="frm">
    	<form action="log.php" method="POST">
    		<p>
    			<label>username:</label>
    			<input type="text" id="user" name="user" />
    		</p>
    		<p>
    			<label>Password:</label>
    			<input type="password" id="pass" name="pass" />
    		</p>
    		<p>
    			<input type="submit" id="btn" value ="Login" />
    		</p>
    	</form>

    </div>
</body>
</html> 