<?php
        require_once 'vendor\autoload.php';
        use WindowsAzure\Common\ServicesBuilder;
        use WindowsAzure\Common\ServiceException;
// Create blob REST proxy.
$connectionString = 'DefaultEndpointsProtocol=https;AccountName=datab;AccountKey=Gr+c6yEphuffTGSg1tVIKnOchH931afSEmIWoHhWt1aIFPUD7brmTNd2dzNJAWgIZaAa5BTWcXtAjjVwB9wVVQ==';
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
try {
    // Get blob.
    $blob = $blobRestProxy->getBlob("pic", "myblob2");
    fpassthru($blob->getContentStream());
}

 //设文件名为test.php
$data=file_get_contents("$blob");
$im = imagecreatefromstring($data);
if ($im !== false) {
    header('Content-Type: image/jpeg'); //对应jpeg的类型
    imagejpeg($im);////也要对应jpeg的类型
    imagedestroy($im);
}
else {
    echo '图片未读入';
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
