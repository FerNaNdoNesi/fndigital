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
		
		$_SESSION['nome'] = $_GET['nome'];
		$_SESSION['descricao'] = $_GET['descricao'];
		$_SESSION['preco'] = $_GET['preco'];
		$_SESSION['precoDe'] = $_GET['precoDe'];
		
		$sql =  "SELECT nomeProduto FROM produtos";
		$res = mysql_query($sql);
						
		while ($row = mysql_fetch_array($res)) {
			if($_GET['nome'] == $row['nomeProduto']){
					$error = 1;
				    header("Location: ../administrador.php?op=2&cad=repet");					
			}
									
		}
		
		if($error != 1){
			// Passando data do banco "AAAA-MM-DD" para "DD/MM/AAAA"
			$_POST['time'] = date('y-m-d');
			
			
			if($_GET['precoDe'] == ''){
				$sql =  "INSERT INTO produtos (codigoProduto, nomeProduto, descricaoProduto, precoProduto, precoDe, visitas, dataProduto) 
				VALUES (NULL, '".$_GET['nome']."', '".$_GET['descricao']."', '".$_GET['preco']."', NULL, '0', NULL);";
			}else{
				$sql =  "INSERT INTO produtos (codigoProduto, nomeProduto, descricaoProduto, precoProduto, precoDe, visitas, dataProduto) 
				VALUES (NULL, '".$_GET['nome']."', '".$_GET['descricao']."', '".$_GET['preco']."', '".$_GET['precoDe']."', '0', NULL);";
			}
			$res = mysql_query($sql);
			
			$sql =  "SELECT codigoProduto FROM produtos WHERE nomeProduto='".$_GET['nome']."'";
			$res = mysql_query($sql);
			$row = mysql_fetch_array($res);
			$codigoProduto = $row['codigoProduto'];
			
			// Faz loop pelo array dos numeros
			foreach($_GET["categorias"] as $categorias){
				$sql =  "INSERT INTO categoriasProduto (codigoProduto_FK, codigoCategoria_FK) VALUES ('".$codigoProduto."', '".$categorias."');";
				$res = mysql_query($sql);
			}
			
			$pasta = $codigoProduto;
			mkdir ("../produtos/$pasta");   // aqui e o diretorio aonde será criado tipo home/public-html/
			
			//session_destroy();
			header("Location: ../administrador.php?op=2&cad=sucess");				
		}
		

?>