<?php
require_once 'vendor\autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
$connectionString = 'DefaultEndpointsProtocol=http;AccountName=datab;AccountKey=Gr+c6yEphuffTGSg1tVIKnOchH931afSEmIWoHhWt1aIFPUD7brmTNd2dzNJAWgIZaAa5BTWcXtAjjVwB9wVVQ==';
// Create blob REST proxy.
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);


$content = fopen("C:\HaxLogs.txt", "r");
$blob_name = "myblob";

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
