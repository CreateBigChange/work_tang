<?php
$link=mysql_connect("localhost","root","1234") or die("链接失败".mysql_error());
mysql_select_db("renwu",$link);
//print_r (mysql_fetch_array($result));
?>