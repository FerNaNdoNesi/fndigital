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
		
		/*$_SESSION['nome'] = $_POST['nome'];
		$_SESSION['descricao'] = $_POST['descricao'];
		$_SESSION['preco'] = $_POST['preco'];
		$_SESSION['precoDe'] = $_POST['precoDe'];*/
		
		$sql =  "SELECT * FROM produtos";
		$res = mysql_query($sql);
				
		while ($row = mysql_fetch_array($res)) {
			if(($_POST['nome'] == $row['nomeProduto'])){
				if($_GET['codigoProduto'] != $row['codigoProduto']){
					$error = 1;
					$prod = $_GET['codigoProduto'];
					header("Location: ../administrador.php?op=4&cad=repet&codigoProduto=".$prod."");	
									
				}
			}
									
		}
		
		if($error != 1){
			// Passando data do banco "AAAA-MM-DD" para "DD/MM/AAAA"
			$_POST['time'] = date('y-m-d');
			
			$sql = "DELETE FROM categoriasProduto WHERE codigoProduto_FK='".$_GET['codigoProduto']."'";
    		$res = mysql_query($sql);
			
			if($_POST['precoDe'] == ''){
				$sql =  "DELETE precoDe FROM produtos WHERE codigoProduto='".$_GET['codigoProduto']."'";
				$res = mysql_query($sql);
				$sql =  "UPDATE produtos SET nomeProduto='".$_POST['nome']."', descricaoProduto='".$_POST['descricao']."', precoProduto='".$_POST['preco']."', precoDe=NULL, dataProduto=NULL WHERE codigoProduto='".$_GET['codigoProduto']."'"; 
			}else{
				$sql =  "UPDATE produtos SET nomeProduto='".$_POST['nome']."', descricaoProduto='".$_POST['descricao']."', precoProduto='".$_POST['preco']."', precoDe='".$_POST['precoDe']."', dataProduto=NULL WHERE codigoProduto='".$_GET['codigoProduto']."'";
			}
			//$sql =  "UPDATE produtos SET nomeProduto='".$_POST['nome']."' WHERE codigoProduto='".$_GET['codigoProduto']."' ";
			$res = mysql_query($sql);
			
			
			// Faz loop pelo array dos numeros
			foreach($_POST["categorias"] as $categorias){
				$sql =  "INSERT INTO categoriasProduto (codigoProduto_FK, codigoCategoria_FK) VALUES ('".$_GET['codigoProduto']."', '".$categorias."');";
				$res = mysql_query($sql);
			}
			
			//session_destroy();
			$prod = $_GET['codigoProduto'];
			header("Location: ../administrador.php?op=4&cad=sucess&codigoProduto=".$prod."");				
		}

?>