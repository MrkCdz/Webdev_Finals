<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)){
        header("Location: login.php");
        exit();
    }
?>
<!doctype html>
<html lang="en">
<head>
	<title>Admin Page</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="cadiz.css">
</head>
<body>
	<div id="Analytics">
		<?php include('header.php'); ?>
		<?php include('navadmin.php'); ?>
		
		<div id='content'>
			<h2></h2>
			<img id= "cat" src="admin2.gif"  alt="nyenye" width = "100%">
	</div>
	<?php include('footer.php'); ?> 
</body>
</html>