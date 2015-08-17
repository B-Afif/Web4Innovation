
<html>

	<head>
	<title>Login</title>

	</head>
	<body>
	
		<?php
	 		$conn = mysqli_connect('localhost', 'root', 'root', 'Web4Innovation');
			$user = $_POST["form-username"];
	 		$pswd =  $_POST["form-password"];
	 		$sql = "SELECT * FROM `Users` WHERE `login`='{$user}' AND `passwd`='{$pswd}'";
	 		$result = mysqli_query($conn,$sql);
	 		$row = mysqli_fetch_assoc($result) ;
			// Check if username and password are correct
	
			if (isset($row)) {
				session_start();
				if ($row['role'] == 'JETunisienne') { 
				$_SESSION["Login"] = "Tun";
				header ("location: index2.php");
				}
				elseif ($row['role'] == 'JESuisse')  { 
				$_SESSION["Login"] = "suisse";
				header ("location: indexjesuisse.php");
				}
				elseif ($row['role'] == 'Tunes') {
					$_SESSION["Login"] = "Tunes";
					header ("location: indexTunes.php");
				}
			else {
				// If not correct, we set the session to NO
				session_start();
				$_SESSION["Login"] = "NO";
				header("location: index.php");
				}
			}
		?>

	</body>
</html>