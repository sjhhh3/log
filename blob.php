<?php
require_once 'vendor\autoload.php';
use WindowsAzure\Common\ServicesBuilder;
try {

$connectionString = 'DefaultEndpointsProtocol=https;AccountName=account name;AccountKey=account key';
echo "1";

$blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
echo "2";


} catch(ServiceException $e){
  // Handle exception based on error codes and messages.
  // Error codes and messages are here: 
  // http://msdn.microsoft.com/en-us/library/windowsazure/dd179446.aspx
  $code = $e->getCode();
  $error_message = $e->getMessage();
  echo $code.": ".$error_message."<br />";
}
?>
