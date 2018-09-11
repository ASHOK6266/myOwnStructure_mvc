<!DOCTYPE html>
<html>
<head>
	<title>Tasks</title>
</head>
<body>
	<?php 
	include_once('../../Controllers/Application/AppController.php');
	$show = new AppController();
	$view = $show->show_tasks();
	echo $view;
	?>
</body>
</html>