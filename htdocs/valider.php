<?php
	$conn = mysqli_connect('localhost', 'root', 'root', 'Web4Innovation');
	$id = $_GET['id']; 
	$sql = "UPDATE Candidature SET valide=1 WHERE (idCandidature='{$id}')";
    $result = mysqli_query($conn, $sql);
	header("location: candidature.php");