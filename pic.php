<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>

        <meta charset="utf-8">
        <title>Confirm</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style2.css">



    </head>
    <body>
            <div class="page-container">	

			
			<?php
			include 'core/init.php';
			$dir = $user_data['profile'];
			$mname = explode("/", $dir);
			$img = "$dir";
            echo '<img src="'.$img.'" alt="图片" />';
			?>

        </br></br></br><h1>This Image Has Alreday Uploaded To The Cloud.</h1></br></br></br>
        
        <?php
        require_once 'vendor\autoload.php';
        use WindowsAzure\Common\ServicesBuilder;
        use WindowsAzure\Common\ServiceException;
// Create blob REST proxy.
$connectionString = 'DefaultEndpointsProtocol=https;AccountName=datab;AccountKey=Gr+c6yEphuffTGSg1tVIKnOchH931afSEmIWoHhWt1aIFPUD7brmTNd2dzNJAWgIZaAa5BTWcXtAjjVwB9wVVQ==';
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
$content = file_get_contents("$dir");
$blob_name = "$mname[1]";
try {
    //Upload blob
    $blobRestProxy->createBlockBlob("pic", $blob_name, $content);
}
catch(ServiceException $e){
    // Handle exception based on error codes and messages.
    // Error codes and messages are here:
    // http://msdn.microsoft.com/library/azure/dd179439.aspx
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message."<br />";
}

if(isset($_POST['file_name'])){
	//$file = $_POST['file_name'];
	$file = "0e0a443424.jpg";
	header('Content-Type: image/jpeg');
    header('Content-Disposition:  attachment;  filename= "'.$file.'"'); 
    readfile('upload/'.$file);
    exit();	
}
?>
<h1>Click To Download The Result.</h1>
<form action="down.php" method="post" name="down">
<input name="file_name" type="hidden">
<a href="#"><input type="submit" value="Download"></a>

</form>
        
        
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>
