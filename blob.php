

<?php 
include 'core/init.php';
echo "0";
if (logged_in() === false){
	session_destroy();
	header('Location: index.php');
	exit();
}
echo "1";

echo $user_data['user_id']; 
echo "2";
?>
