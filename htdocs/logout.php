<<!DOCTYPE html>
<html>
<head>
	<title>Log Out</title>
</head>
<body>
<?php
	session_unset();
  	session_destroy();
  	header("location: index.php");
 ?>
</body>
</html>