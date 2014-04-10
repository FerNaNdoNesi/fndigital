<?php
	session_start();
	if(isset($_GET['categoria']) && isset($_GET['produto']) ){
		$categoria = $_GET['categoria'];
		$produto = $_GET['produto'];
		
		$titulo = '../produtos/';
		$titulo = $titulo.''.$categoria;
		$titulo = $titulo.'/';
		$titulo = $titulo.''.$produto;
		$preco = $titulo.'/preco.txt';
		$descricao = $titulo.'/descricao.txt';
		$titulo = $titulo.'/titulo.txt';
	
		$Arq = fopen($titulo, 'ab+');
		while (!feof($Arq)) {$_SESSION['titulo'] = fgets($Arq);}
		
		$Arq = fopen($descricao, 'ab+');
		while (!feof($Arq)) {$_SESSION['descricao'] = fgets($Arq);}
		
		$Arq = fopen($preco, 'ab+');
		while (!feof($Arq)) {$_SESSION['preco'] = fgets($Arq);}
		
		$_SESSION['categoria'] = $_GET['categoria'];
		$_SESSION['produto']   = $_GET['produto'];
		header('Location: ../administrador.php');
	}
	
?>