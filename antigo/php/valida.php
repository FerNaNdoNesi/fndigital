<?php
	session_start();
	
	$Arq = fopen("../senha.txt", 'ab+');
	while (!feof($Arq)) {$senha = fgets($Arq);}

	$Arq = fopen("../user1.txt", 'ab+');
	while (!feof($Arq)) {$user1 = fgets($Arq);}

	$Arq = fopen("../user2.txt", 'ab+');
	while (!feof($Arq)) {$user2 = fgets($Arq);}

if(isset($_POST['usuario']) && isset($_POST['senha']) && ($_POST['usuario']== $user1 || $_POST['usuario']== $user2) && ($_POST['senha']== $senha)){		
	$_SESSION['usuario'] = $_POST['usuario'];
	$_SESSION['validado'] = "sim";
	header("Location: ../administrador.php");
}
else{
	$_SESSION['validado'] = "nao";
	header('Location: ../login.php?erro=1');
}
?>