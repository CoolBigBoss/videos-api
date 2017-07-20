<?php
$id=$_REQUEST['id'];
$url=$_REQUEST['url'];
$api_1='http://65yw.2m.vc/chaojikan.php?url=';
$api_2='http://www.16891699.com/index.php?url=';
$api_3='http://000o.cc/cao/000.php?url=';
$api_4='http://yyygwz.com/index.php?url=';
$api_5='http://api47ks.duapp.com/index.php?url=';
if ($id=='1') {
	$host=$api_1.$url;
}elseif ($id=='2') {
	$host=$api_2.$url;
}elseif ($id=='3') {
	$host=$api_3.$url;
}elseif ($id=='4') {
	$host=$api_4.$url;
}elseif ($id=='5') {
	$host=$api_5.$url;
}
echo "<script language='javascript' 
type='text/javascript'>";  
echo "window.location.href='$host'";  
echo "</script>"
?>