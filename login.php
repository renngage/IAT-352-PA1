<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	@$name = $_POST['name'];
	@$password = $_POST['password'];
  echo "$name";
  echo "$password";

  $myfile = fopen("testTryFile13.txt", "a") or die("Unable to open file!");

// $passwordConfirm = "";
// $password = "";

		@$nameW = "Name: ". $_POST["name"];
		@$emailW = "\nEmail: ". $_POST["email"];
		@$passwordW = "\nPassword: ". $_POST["password"];
		@$passwordConfirmW = "\nConfirmPassword: ". $_POST["passwordConfirm"];
		@$countryW = "\nCountry: ". $_POST["country"];


// if (password != passwordConfirm) {
// 	echo "Passwords do not match Re-enter password";
// }


// $School = $_POST["School"];
	fwrite($myfile, $nameW);
	fwrite($myfile, $emailW);
	fwrite($myfile, $passwordW);
	fwrite($myfile, $countryW);




 fclose($myfile);

	if ((!isset($name)) || (!isset($password))) {
	//Visitor needs to enter a name and password

?>


<h1>Please Log In</h1>
<p>This page is secret.</p>


<form method="post" action="login.php">
	<p>Username: <input type="text" name="name"></p>
	<p>Password: <input type="password" name="password"></p>
	<p><input type="submit" name="submit" value="Log In"></p>
</form>

<?php


	} else if(($name=="pranav") && ($password=="hi")) {
	// visitor's name and password combination are correct
	echo "<h1>Here it is!</h1>
	<p>I bet you are glad you can see this secret page.</p>";
		} else {
			// visitor's name and password combination are not correct
			echo "<h1>Go Away!</h1>
			<p>You are not authorized to use this resource.</p>";
		}
?>


</body>
</html>


