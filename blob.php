<?php
require_once 'vendor\autoload.php';
echo "0";
use WindowsAzure\Common\ServicesBuilder;
try {

$connectionString = 'DefaultEndpointsProtocol=https;AccountName=datab;AccountKey=Gr+c6yEphuffTGSg1tVIKnOchH931afSEmIWoHhWt1aIFPUD7brmTNd2dzNJAWgIZaAa5BTWcXtAjjVwB9wVVQ==';
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
