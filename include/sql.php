<?php
$con = mysql_connect(us-cdbr-azure-east-a.cloudapp.net","b0eaced6e338d1","8881818068fc292");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }else{
	  echo 'connect';
  }
mysql_close($con);
?>
