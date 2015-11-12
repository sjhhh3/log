<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
include 'core/init.php';
include 'include/head.php';


if(empty($_POST) === false){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) === true || empty($password) === true){
		//$errors[] = 'You neet to enter a username and password';	
		?><br><br><br><br><br><br><h1>You neet to enter a username and password.</h1>
		<button type="tryagain" onClick="window.location.href='index.php';">BACK</button><?php
	}else if(user_exists($username) ===false){
	    //$errors[] = 'We can\'t find that username. Have ou registered?';
		?><br><br><br><br><br><br><h1>We can't find that username. Have you registered?</h1>
		<button type="tryagain" onClick="window.location.href='index.php';">BACK</button><?php
	}else if(user_active($username) === false){
		//$errors[] = 'You haven\'t activated your account!';
		?><br><br><br><br><br><br><h1>You haven't activated your account. Please wait 24 hours after you registered.</h1>
		<button type="tryagain" onClick="window.location.href='index.php';">BACK</button><?php
	}else {
		$login = login($username, $password);
		if ($login === false){
		    //$errors[] = 'That username/password cobination is incorrect.';
		?><br><br><br><br><br><br><h1>That username/password cobination is incorrect. Please try again.</h1>
		  <button type="tryagain" onClick="window.location.href='index.php';">BACK</button><?php
		}else{
			$_SESSION['user_id'] = $login;
			header('Location:main.php');
			exit();
		}
	}
	
//	print_r($errors);
}
?>





    <body>

         <div class="page-container">
		         <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
		     </body>

</html>
