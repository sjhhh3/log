<?php
echo"1";
require_once 'vendor\autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
echo"2";
// Create blob REST proxy.
$connectionString = 'DefaultEndpointsProtocol=https;AccountName=datab;AccountKey=Gr+c6yEphuffTGSg1tVIKnOchH931afSEmIWoHhWt1aIFPUD7brmTNd2dzNJAWgIZaAa5BTWcXtAjjVwB9wVVQ==';
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
echo"3";

$content = file_get_contents("c:\myfile.txt");
$blob_name = "myblob";
echo"4";

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
