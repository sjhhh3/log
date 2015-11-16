<?php
$connect_error = '<strong>Sorry, we\'re experiencing SSQL connection problems.</strong>';
$connect_error2 = '<strong>Sorry, we\'re experiencing DB connection problems.</strong>';
mysql_connect("civile.rdsmz5f4ywl100h.rds.bj.baidubce.com","sjhhh3","sjh1993211") or die($connect_error);
mysql_select_db('login') or die($connect_error2);
?>
