<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<title>CSS美化的漂亮搜索框</title> 
<style type="text/css"> 
body
{ 
font: normal 100% 'Arial','Helvetica','Verdana',sans-serif; 
color: #333; 
} 
p 
{ 
padding: 12px 0; 
margin: 0; 
font-size: .8em; 
line-height: 1.5; 
} 
form 
{ 
margin: 0; 
} 
#search_box 
{ 
width: 201px; 
height: 31px; 
background: url(../../../img/bg_search_box.gif); 
} 
#search_box #s 
{ 
float: left; 
padding: 0; 
margin: 6px 0 0 6px; 
border: 0; 
width: 159px; 
background: none; 
font-size: .8em; 
} 
#search_box #go 
{ 
float: right; 
margin: 3px 4px 0 0; 
} 
</style> 
</head>
<?php
include "../../../conf/conf.php"
?>
<body> 
<div id="search_box"> 
<form id="search_form" method="post" action="#"> 
<input type="text" id="s" value="Search" class="swap_value" name="search"> 
<input type="image" src="../../../img/btn_search_box.gif" width="27" height="24" id="go" alt="Search"  onClick="document.formName.submit()" > 
</form> 
</div> 
<?php
if(isset($_POST['search']))
{
	//print_r ($_POST['search']);
	$sql="select "
}	
	else
{	
	//echo "no exsit";
}
?>
</body> 
</html>
