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
			
			$img = "$dir";
            echo '<img src="'.$img.'" alt="图片" />';
			?>

        <br><br><br><h1>Please Confirm Your Image And Click To Upload To The Cloud.</h1>
        
        <?php
        require_once 'vendor\autoload.php';
        use WindowsAzure\Common\ServicesBuilder;
        use WindowsAzure\Common\ServiceException;
// Create blob REST proxy.
$connectionString = 'DefaultEndpointsProtocol=https;AccountName=datab;AccountKey=Gr+c6yEphuffTGSg1tVIKnOchH931afSEmIWoHhWt1aIFPUD7brmTNd2dzNJAWgIZaAa5BTWcXtAjjVwB9wVVQ==';
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
$content = file_get_contents("$dir");
$blob_name = "$dir";
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
        ?>
        
        
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>