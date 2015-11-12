 
<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
include 'core/init.php';
include 'include/head.php';

if(empty($_POST) === false){
	$required_fields = array('username','password','firstname','lastname','email');
	foreach($_POST as $key=>$value){
		if (empty($value) && in_array($key, $required_fields) === true){
			$errors[] = 'Fields should be completed.';
			break 1;
		}
	}
	
if(empty($errors) === true){
	if(user_exists($_POST['username']) === true){
		?><div class="page-container"><h1>Sorry, this username is already taken. Please try again.</h1><?php
	}
	else if(preg_match("/\\s/", $_POST['username']) == true){
		//$errors[] = 'Your username must not contain any spaces.';
		?><div class="page-container"><h1>Your username must not contain any spaces.</h1><?php
	}
	else if(strlen($_POST['password']) < 6){
		$errors[] = 'Your password must be at least 6 charachers.';
	}
	else if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
		//$errors[] = 'A valid email address is required.';
		?><div class="page-container"><h1>Sorry, this email address is not valid. Please try again.</h1><?php
	}
	else if(email_exists($_POST['email']) === true){
		//$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already registered.';
	    ?><div class="page-container"><h1>Sorry, this email address is already registered. Please try again.</h1><?php
	}
	else{
	    $register_data = array(
		    'username'   => $_POST['username'],
			'password'   => $_POST['password'],
			'firstname'  => $_POST['firstname'],
			'lastname'   => $_POST['lastname'],
			'email'      => $_POST['email'],
		);
		register_user($register_data);
			
	    ?><div class="page-container"><h1>Congratulations. You have registered in. It will take 24 hours to check. Thank you.</h1><?php
  }
}
}
?>

   <body>

         
             <!-- <h1>Information uploaded. It will take 24 hours to comfirm. Thank you.</h1>
			<button type="sbumit" onClick="window.location.href='index.php';">BACK TO LOG IN</button> -->
			
			
			<div class="page-container"><button type="sbumit" onClick="window.location.href='register.php';">BACK TO REGISTER</button> 
			<br><button type="sbumit" onClick="window.location.href='index.php';">BACK TO LOG IN</button> 
			
			        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>
