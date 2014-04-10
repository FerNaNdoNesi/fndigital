<?php
	session_start();

	function exibe($categoria, $produto){

		$titulo = 'produtos/';
		$titulo = $titulo.''.$categoria;
		$titulo = $titulo.'/';
		$titulo = $titulo.''.$produto;
		$imagem = $titulo.'/imagem.jpg';
		$preco = $titulo.'/preco.txt';
		$descricao = $titulo.'/descricao.txt';
		$contador = $titulo.'/contador.txt';
		$titulo = $titulo.'/titulo.txt';
		
		$Arq = fopen($titulo, 'ab+');
		while (!feof($Arq)) {$tt = fgets($Arq);}
		if($tt != ""){
			//echo "<center><a href=\"index.php?cat=".$categoria."&prod=".$produto."\">";
			echo "<center><a href=\"index.php?cat=".$categoria."&prod=".$produto."\">";
			//echo "<center><a href=\"#categoria=".$categoria."&produto=".$produto."\" onClick=\"javascript: abrir();\">";
           	echo "<foto><img src=\"".$imagem."\" border=\"0\" height=\"160px\" ></foto><br/>";
			$Arq = fopen($titulo, 'ab+');
			while (!feof($Arq)) {$titulo = fgets($Arq);}
			echo "<titulo>",$titulo,"</titulo><br/> ";
			$Arq = fopen($descricao, 'ab+');
			while (!feof($Arq)) {$descricao = fgets($Arq);}
			echo "<descricao>",$descricao,"</descricao><br/><br/>";
			$Arq = fopen($preco, 'ab+');
			while (!feof($Arq)) {$preco = fgets($Arq);}
			echo "<preco>",$preco,"</preco><br/> ";
			
			$Arq = fopen($contador, 'ab+');
			while (!feof($Arq)) {$cont = fgets($Arq);}
			if($cont == ''){
			$Arq = fopen($contador, 'wb+');
				$cont = 0;
				fwrite($Arq,$cont);
			}
			if(isset($_SESSION['validado']) && $_SESSION['validado'] == 'sim'){
				echo "<cc>Visitas ",$cont,"</cc>";
			}
			
			echo "</a></center>";
		}
	}
	
	function select($categoria, $produto){
		
		$titulo = 'produtos/';
		$titulo = $titulo.''.$categoria;
		$titulo = $titulo.'/';
		$titulo = $titulo.''.$produto;
		$imagem = $titulo.'/imagem.jpg';
		$preco = $titulo.'/preco.txt';
		$descricao = $titulo.'/descricao.txt';
		$contador = $titulo.'/contador.txt';
		$titulo = $titulo.'/titulo.txt';
		
		$Arq = fopen($titulo, 'ab+');
		while (!feof($Arq)) {$tt = fgets($Arq);}
		if($tt != ""){

           	echo "<ff><img src=\"".$imagem."\" border=\"0\" height=\"250px\" ></ff><br/>";
			
			$Arq = fopen($titulo, 'ab+');
			while (!feof($Arq)) {$titulo = fgets($Arq);}
			echo "<tt>",$titulo,"</tt><br/> ";
			
			$Arq = fopen($descricao, 'ab+');
			while (!feof($Arq)) {$descricao = fgets($Arq);}
			echo "<dd>",$descricao,"</dd><br/><br/>";
			
			$Arq = fopen($preco, 'ab+');
			while (!feof($Arq)) {$preco = fgets($Arq);}
			echo "<pp>",$preco,"</pp><br/> ";
			echo "</center>";
			
			$Arq = fopen($contador, 'ab+');
			while (!feof($Arq)) {$cont = fgets($Arq);}
			$cont = $cont+1;
			$Arq = fopen($contador, 'wb+');
			fwrite($Arq,$cont);
		}
	}

?>	