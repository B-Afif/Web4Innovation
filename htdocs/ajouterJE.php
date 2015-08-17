<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'Web4Innovation');
$login = $_GET['login'];
$passwd = $_GET['password'];
$email = $_GET['email'];
$role = $_GET['Role'];
$ecole = $_GET['ecole'];
$sql = 'INSERT INTO USERS (idUser,login, passwd, email, role) VALUES ("",$login,$passwd,$email,$role)';
$res = mysqli_query($conn,$sql);
switch ($role) {
	case 'Tunisienne':
	{
		$sql = 'INSERT INTO JETunisienne (idJETunisienne,ecole) VALUES ("",$ecole)';
		$res = mysqli_query($conn,$sql);
	}

		break;
	case 'Suisse':
	{
		$sql = 'INSERT INTO JESuisse (idJESuisse,ecole) VALUES ("",$ecole)';
		$res = mysqli_query($conn,$sql);
	}

	case 'Etudiant':
	{
		$sql = 'INSERT INTO Etudiant (idEtudiant,ecole) VALUES ("",$ecole)';
		$res = mysqli_query($conn,$sql);
	}
	default:
		# code...
		break;
}
sql=