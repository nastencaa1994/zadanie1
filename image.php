<?php
header('Content-type: text/html; charset=utf-8');
if($_GET["send"]==1){
	$n=(isset($_COOKIE['n']))?$_COOKIE['n']:0;
	$n++;
setcookie('n',$n);}
echo 'мы показали изображение - '.$_COOKIE['n'].' раз'.'<br />';

?>
<html>
<meta charcet="utf-8"/>
<head></head>
<body>
<img src="fon.jpg" width='640px' height='480px'>
</body></html>