<?php
$connect_error = '<strong>Sorry, we\'re experiencing SSQL connection problems.</strong>';
$connect_error2 = '<strong>Sorry, we\'re experiencing DB connection problems.</strong>';
mysql_connect("us-cdbr-azure-east-a.cloudapp.net","b0eaced6e338d1","8881818068fc292") or die($connect_error);
mysql_select_db('civile') or die($connect_error2);
?>
