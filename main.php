<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>

        <meta charset="utf-8">
        <title>Upload</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style2.css">



    </head>
    <body>
            <div class="page-container">
<?php
error_reporting(0);
include 'core/init.php';
if (logged_in() === false){
	session_destroy();
	header('Location: index.php');
	exit();
}
$name = $_FILES['file']['name'];	
$extension = strtolower(substr($name,strpos($name,'.')+1));
$size = $_FILES['file']['size'];	
$max_size = 2097152;
$type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)){
	if(!empty($name)){
		if (($extension=='jpg'||$extension=='jpeg')&&$type=='image/jpeg'&&$sinze<=$max_size){
	$location = 'upload/';
	
	$md5_name = substr(md5(time()), 0, 10);
	change_profile_image($session_user_id, $tmp_name, $extension, $md5_name);
	
	
	if (move_uploaded_file($tmp_name, $location.$md5_name. '.' .$extension)){
		echo "File Have Been Uploaded.";
	}else{
		echo 'There was an error.';
	}
	}else{
		echo 'File must be Jpg/Jpeg within 2mb or less.';
	}
	}else{
		echo'Please choose a file.';
	}        		
}
?>
            <h1>Logged In. Please Upload Your File.</h1><br><br>
			<form action="main.php" method="POST" enctype="multipart/form-data">
			<h1>Choose a file</h1><a href="#"><input type="file" name="file"></a>
			<br><button>UPLOAD</button></form><br><br>
		
	<?php
			$file_path = 'upload/' . $md5_name . '.' . $extension;
			$img = "$file_path";
            echo '<img src="'.$img.'" alt="图片" />';


	?>

	
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>
