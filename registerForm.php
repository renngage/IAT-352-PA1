<!DOCTYPE html>
<html>
<title>register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/main.css" rel="stylesheet">
<!-- html styling obtained from w3s schools -->

<style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>


<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <h3 class="w3-wide"><b>LOGO</b></h3>
    </div>
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <a href="homepage.html" class="w3-bar-item w3-button">Home</a>
        <a href="#" class="w3-bar-item w3-button">Forums</a>
        <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
            Store <i class="fa fa-caret-down"></i>
        </a>
        <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <a href="productsListPage.html" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>All PC Games</a>
            <a href="#" class="w3-bar-item w3-button">Microsoft Xbox</a>
            <a href="#" class="w3-bar-item w3-button">Sony PlayStation</a>
            <a href="#" class="w3-bar-item w3-button">Nintendo</a>
        </div>
        <a href="#" class="w3-bar-item w3-button">Shop</a>

<!--        make a button class and make these two into buttons-->
        <div class="w3-display-bottomleft w3-center w3-padding-64">
            <a href="login.php" class="w3-bar-item w3-button">Sign in</a>
            <a href="registerForm.php" class="w3-bar-item w3-button">Register</a>
        </div>

    </div>
</nav>


<!-- Creats div class used for styling -->
<div class="signUpForm">
<form action="login.php" method="post" 
   onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
   <!--  Checkbox code obtained from - https://www.termsfeed.com/blog/add-i-agree-terms-checkbox/  -->

       <!--  Creates form fields which are used later -->
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		Password: <input type="Password" name="password"><br>
		Confirm Password: <input type="Password" name="passwordConfirm"><br>
		Country: <input type="text" name="country"><br>
		<input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions <br>
		<input type="submit" name="submit" value="Submit and log in" />

		
</form>
</div>


<script>
    // Accordion
    function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
</body>
</html>