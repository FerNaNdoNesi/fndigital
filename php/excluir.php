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
		  // echo "--> 2 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit; 
		}

	$sql = "DELETE FROM produtos WHERE codigoProduto='".$_GET['codigoProduto']."'";
   	$res = mysql_query($sql);
		
	$sql = "DELETE FROM categoriasProduto WHERE codigoProduto_FK='".$_GET['codigoProduto']."'";
    $res = mysql_query($sql);	
	
	//$pasta = $_GET['codigoProduto'];
	//rmdir ("../produtos/$pasta", 0777);   // aqui e o diretorio aonde será criado tipo home/public-html/

	if($res){
		header("Location: ../administrador.php?cat=0&excluido=sim");
	}else{
		header("Location: ../administrador.php?cat=0&excluido=nao");
	}
?>