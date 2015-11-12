<?php
$connect_error = '<strong>Sorry, we\'re experiencing SQL connection problems.</strong>';
mysql_connect("us-cdbr-azure-east-a.cloudapp.net","b0eaced6e338d1","dc0f09d6") or die($connect_error);
mysql_select_db('login') or die($connect_error);
?>
