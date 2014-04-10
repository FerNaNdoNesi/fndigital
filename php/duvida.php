<?php 
	session_start();
	
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
			// Passando data do banco "AAAA-MM-DD" para "DD/MM/AAAA"
			//$_POST['time'] = date("d/m/Y H:i:s");
			//$_POST['time'] = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
			$sql =  "SELECT nomeProduto FROM produtos WHERE codigoProduto='".$_GET['codProduto']."'";
			$res = mysql_query($sql);
			$row = mysql_fetch_array($res);
			$nomeProduto = $row['nomeProduto'];
			
			//$sql =  "INSERT INTO duvidas (codigo) VALUES (NULL);";
			$sql =  "INSERT INTO duvidas (codigo, nome, telefone, email, mensagem, produto, data) 
			VALUES (NULL, '".htmlspecialchars($_POST['nome'])."', '".htmlspecialchars($_POST['telefone'])."', '".htmlspecialchars($_POST['email'])."', '".htmlspecialchars($_POST['mensagem'])."', '".$nomeProduto."', NULL);";
			$res = mysql_query($sql);
			$prod = $_GET['codProduto'];
			header("Location: ../".$_GET['link']."?codProduto=".$prod."&popUpMsg=duvida");				
?>