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

        </br></br></br><h1>The Result Is Downloading.</h1></br></br></br>
        
<?php

// 以二进制格式打开文件
$name = "myblob2.jpg";
$fp = fopen($name, 'rb');

// 发送合适的报头
header("Content-Type: image/jpg");
header("Content-Length: " . filesize($name));

// 发送图片并终止脚本
//fpassthru($fp);

 $filename=realpath("$name"); //文件名
 $date=date("Ymd-H:i:m");
 header("Content-type=html/text;charset=utf-8");
 Header( "Content-type:  application/octet-stream "); 
 Header( "Accept-Ranges:  bytes "); 
 Header( "Accept-Length: " .filesize($filename));
 header( "Content-Disposition:  attachment;  filename= {$date}.jpg"); 
 echo file_get_contents($filename);
 readfile($filename); 

downfile();
//exit;

?>

        
        
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>
