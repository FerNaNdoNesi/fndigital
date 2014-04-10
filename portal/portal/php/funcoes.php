<?php 
	function categorias(){
		$Arq = fopen("block/sn.txt", 'rb');
		while (!feof($Arq)) {$sn = fgets($Arq);}
		
		$Arq = fopen("block/user.txt", 'rb');
		while (!feof($Arq)) {$user = fgets($Arq);}
		
		$Arq = fopen("block/local.txt", 'rb');
		while (!feof($Arq)) {$local = fgets($Arq);}
		
		$Arq = fopen("block/db.txt", 'rb');
		while (!feof($Arq)) {$db = fgets($Arq);}

		if(!($conexao = mysql_connect($local,$user,$sn))) {
		   echo "--> 1 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit;
		} 
		if(!($conect = mysql_select_db($db,$conexao))) { 
		   echo "--> 2 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit; 
		}

		$sql = "SELECT * FROM categorias";
    	$res = mysql_query($sql);

		echo "<table>";
		$x = 1;
		echo "<tr>";
		while ($row = mysql_fetch_array($res)) {
			echo"<td><a href=\"categoria.php?cat=".$row['link']."\"><img src=\"img/categorias/".$row['img']."\"/><br/>".$row['nome']."</a></td>";
			if($x % 5 == 0){
		  		echo "</tr><tr>";
			}
		$x++;
		}
		echo "</tr></table>";
		
	}
	function topCategoria(){
		$Arq = fopen("block/sn.txt", 'rb');
		while (!feof($Arq)) {$sn = fgets($Arq);}
		
		$Arq = fopen("block/user.txt", 'rb');
		while (!feof($Arq)) {$user = fgets($Arq);}
		
		$Arq = fopen("block/local.txt", 'rb');
		while (!feof($Arq)) {$local = fgets($Arq);}
		
		$Arq = fopen("block/db.txt", 'rb');
		while (!feof($Arq)) {$db = fgets($Arq);}

		if(!($conexao = mysql_connect($local,$user,$sn))) {
		   echo "--> 1 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit;
		} 
		if(!($conect = mysql_select_db($db,$conexao))) { 
		   echo "--> 2 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit; 
		}

		$sql = "SELECT img, nome FROM categorias WHERE link='".$_GET['cat']."'";
    	$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
     	$img =  $row['img'];
		$nome =  $row['nome'];
		echo "
		<img src=\"img/categorias/".$img."\" height=\"25px\" />
		<img src=\"img/categorias/".$img."\" height=\"50px\" />
		<img src=\"img/categorias/".$img."\" height=\"100px\" />
		<img src=\"img/categorias/".$img."\" height=\"150px\" />
		
		<h1>".$nome."</h1>";
	}
	
	function anuncios(){
		$Arq = fopen("block/sn.txt", 'rb');
		while (!feof($Arq)) {$sn = fgets($Arq);}
		
		$Arq = fopen("block/user.txt", 'rb');
		while (!feof($Arq)) {$user = fgets($Arq);}
		
		$Arq = fopen("block/local.txt", 'rb');
		while (!feof($Arq)) {$local = fgets($Arq);}
		
		$Arq = fopen("block/db.txt", 'rb');
		while (!feof($Arq)) {$db = fgets($Arq);}

		if(!($conexao = mysql_connect($local,$user,$sn))) {
		   echo "--> 1 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit;
		} 
		if(!($conect = mysql_select_db($db,$conexao))) { 
		   echo "--> 2 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit; 
		}
		
		$sql =  "SELECT codigo FROM categorias WHERE link='".$_GET['cat']."'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
     	$codigo_categoria =  $row['codigo'];
		

		$sql = "SELECT titulo, descricao1, preco, foto1, foto2 FROM anuncios WHERE codigo_categoria =".$codigo_categoria."";
    	$res = mysql_query($sql);
				
		
		while ($row = mysql_fetch_array($res)) {
			echo "<div id=\"lista\"><a href=\"#\"> ";
			echo "<titulo><center>".$row['titulo']."</center></titulo>";
			echo "<descricao1><p>".$row['descricao1']."</p></descricao1>";
			echo "<preco><preco2>".$row['preco']."</preco2></preco>";
			echo "<foto><img src=\"fotos_anuncios/".$row['foto1']." \" height=\"100px\"/></foto>";
			echo "</a></div><hr>";						
		}

	}


?>