<?php
					/*$username= $_POST['username'];
					$email= $_POST['email'];
					$password= $_POST['password'];
					$password2= $_POST['password2'];
					$phone= $_POST['phone'];


					if (!empty($username) || !empty($email) || !empty($password) || !empty($password2) || !empty($phone)) {
						$host = "localhost";
						$dbUsername ="root";
						$dbpassword="";
						$dbname="register";
						 	//create connection;

						$conn = new mysqli($host,$dbUsername,$dbpassword,$dbname);
						if (mysqli_connect_error()) {
							die('Connect Error('.mysqli_connect_errno() .')' . mysqli_connect_error());
						}
						else{
							$SELECT ="SELECT email from register where email =? Limit 1";
							$INSERT = "INSERT INTO users (username,email,password ,phone)  VALUES('$username','$email', '$password','$phone')";
							$stmt = $conn -> prepare($SELECT);
							$stmt -> bind_param('ssssii' ,$email);
							$stmt -> execute();
							$stmt -> bind_result($email);
							$stmt -> store_result();
							$rnum = $stmt -> num_rows;
							if ($rnum == 0) {
								 $stmt -> close();
								 $stmt = $conn -> prepare($INSERT);
								 $stmt -> bind_param('ssssii' ,$username,$email, $password,$phone);
								 $stmt -> execute();
								 echo "New record inserted sucessfully";
							}
							else
							{
								echo "Someone already register using this email";
							}
							$stmt -> close();
							$conn -> close();
						}

					}
					else
						{
							echo "All field are required";
							die();
				}*/


/*session_start();
					$username= $_POST['username'];
					$email= $_POST['email'];
					$password= $_POST['password'];
					$password2= $_POST['password2'];
					$phone= $_POST['phone'];

$db = mysqli_connect("localhost","root","");
		if (isset($_POST['register_btn'])) {
					//session_start();
					$username= mysql_escape_string($username);
					$email= mysql_escape_string($email);
					$password= mysql_escape_string($password);
					$password2= mysql_escape_string($password2);
					$phone= mysql_escape_string($phone);

				if ($password == $password2) {
					//create user
					$password= md5($password); //hash password before storing for security purposes
					$sql = "INSERT INTO users (username,email,password)  VALUES('$username','$email', '$password')";
					mysqli_query($db,$sql);
					$_SESSION['message'] ="you are now logged in" ;
					$_SESSION['username'] = $username ;
					header("location:home.php");  //redirect to home page
				}
				else{
					$_SESSION['message'] ="the two passwords do not match";
				    
				}
		}**/


		session_start();

// initializing variables
$username = "";
$email    = "";
/*$password= "password";
$password2= "password2";
$phone= "phone";
*/
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

// REGISTER USER
if (isset($_POST['username'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password != $password2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	/*header('location: index.php');*/
  }
}



?>





