<?php
include "conf.php";
$sql="select controduction from current_task where id= ".$_GET['id'];
$realse=mysql_query($sql);
$row = mysql_fetch_array($realse);
echo $row[0];
?>