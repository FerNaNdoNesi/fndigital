<?php session_start();

	$Arq = fopen("../block/sn.txt", 'rb');
		while (!feof($Arq)) {$sn = fgets($Arq);}
		
		$Arq = fopen("../block/user.txt", 'rb');
		while (!feof($Arq)) {$user = fgets($Arq);}
		
		$Arq = fopen("../block/local.txt", 'rb');
		while (!feof($Arq)) {$local = fgets($Arq);}
		
		$Arq = fopen("../block/db.txt", 'rb');
		while (!feof($Arq)) {$db = fgets($Arq);}

		if(!($conexao = mysql_connect($local,$user,$sn))) {
		   //echo "--> 1 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit;
		} 
		if(!($conect = mysql_select_db($db,$conexao))) { 
		   //echo "--> 2 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit; 
		}
			
		$sql =  "UPDATE new SET titulo='".$_POST['titulo']."', codigoProduto='".$_POST['codigoProduto']."' WHERE codigo='".$_GET['codigo']."'";
			
		//$sql =  "UPDATE produtos SET nomeProduto='".$_POST['nome']."' WHERE codigoProduto='".$_GET['codigoProduto']."' ";
		$res = mysql_query($sql);
	
			
		//session_destroy();
		$prod = $_GET['codigoProduto'];
		header("Location: ../administrador.php?op=21&cad=sucess&codigo=".$prod."");				
		

?>