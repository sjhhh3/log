<?php
if(isset($_POST['file_name'])){
	//$file = $_POST['file_name'];
	$file = "f9f20a7838.jpg";
	header('Content-Type: image/jpeg');
    header('Content-Disposition:  attachment;  filename= "'.$file.'"'); 
    readfile('upload/'.$file);
    exit();	
}
?>
<form action="down.php" method="post" name="down">
<input name="file_name" type="hidden">
<input type="submit" value="Download">
</form>


