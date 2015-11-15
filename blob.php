<?php
echo"1";
require_once 'vendor\autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
echo"2";
// Create blob REST proxy.
$connectionString = 'DefaultEndpointsProtocol=https;AccountName=account name;AccountKey=account key';
$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
echo"3";

$content = fopen("c:\myfile.txt", "r");
$blob_name = "myblob";

try {
    //Upload blob
    $blobRestProxy->createBlockBlob("mycontainer", $blob_name, $content);
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
