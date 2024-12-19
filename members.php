<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)){
        header("Location: login.php");
        exit();
    }
?>
<!doctype html>
<html lang = "en">
<head>
	<title>members</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="cadiz.css">
</head>
<body>
	<div id="constant">
		<?php include('header.php'); ?>
		<?php include('navmembers.php'); ?>
		
		<div id='content'>
			<h2></h2>
			<img id= "dashboard" src="homepage.gif"  alt="PUSI" width = "100%/c"> 
	</div>
	<?php include('footer.php'); ?> 
</body>
</html>
