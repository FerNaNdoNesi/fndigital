<?php
	session_start();
	
	if(isset($_GET['titulo']) && isset($_GET['descricao']) && isset($_GET['preco'])){
		$categoria = $_SESSION['categoria'];
		$produto = $_SESSION['produto'];
		
		$titulo = '../produtos/';
		$titulo = $titulo.''.$categoria;
		$titulo = $titulo.'/';
		$titulo = $titulo.''.$produto;
		
		$preco = $titulo.'/preco.txt';
		$descricao = $titulo.'/descricao.txt';
		$titulo = $titulo.'/titulo.txt';
		
		$Arq = fopen($titulo, 'wb');
		fwrite($Arq,$_GET['titulo']);
		
		$Arq = fopen($descricao, 'wb');
		fwrite($Arq,$_GET['descricao']);
		
		$Arq = fopen($preco, 'wb');
		fwrite($Arq,$_GET['preco']);
		header('Location: ../administrador.php?cad=sucess');				
		
	}

?>