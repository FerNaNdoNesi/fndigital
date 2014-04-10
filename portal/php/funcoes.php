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
			echo"<td><a href=\"#\"><img src=\"img/categorias/".$row['img']."\"/><br/>".$row['nome']."</a></td>";
			if($x % 5 == 0){
		  		echo "</tr><tr>";
			}
		$x++;
		}
		echo "</tr></table>";
		
	}


?>