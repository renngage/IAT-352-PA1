<html>
<body>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<form action="login.php" method="post" 
   onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		Password: <input type="Password" name="password"><br>
		Confirm Password: <input type="Password" name="passwordConfirm"><br>
		Country: <input type="text" name="country"><br>
		<input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions <br>
		<input type="submit" name="submit" value="Submit and log in" />

		<!--  Checkbox code obtained from - https://www.termsfeed.com/blog/add-i-agree-terms-checkbox/  -->
</form>

<?php





?>






</body>
</html>