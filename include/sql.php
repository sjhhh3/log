<?php
$con = mysql_connect("civile.rdsmz5f4ywl100h.rds.bj.baidubce.com","sjhhh3","sjh1993211");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }else{
	  echo 'connect';
  }
mysql_close($con);
?>
