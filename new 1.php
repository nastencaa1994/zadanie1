<?php 
header('Content-type: text/html; charset=utf-8');
if(isset($_POST[button])){
	header("Location:image.php?send=1");
}
?>
<html>
<meta charcet="utf-8"/>
<header>
</header>
<body>
<form method='post'>
<input type="submit" name='button' value='Показать изображение' />
</body>
</html>