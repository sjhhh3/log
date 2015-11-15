

<?php 
include 'core/init.php';
if (logged_in() === false){
	session_destroy();
	header('Location: index.php');
	exit();
}

?>
