<?php
	session_start();
	$ped = "../pedidos/";
	$ped2 = "../contadores/";
	$ped2 = $ped2.''.$_SESSION['cat'].'_cont.txt';
	$ped = $ped.''.$_SESSION['cat'].'.txt';
	
	$produto = $_SESSION['prod'];
	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$pedido = $_GET['pedido'];
	
	$titulo = '../produtos/';
		$titulo = $titulo.''.$_SESSION['cat'];
		$titulo = $titulo.'/';
		$titulo = $titulo.''.$produto;
		$titulo = $titulo.'/titulo.txt';
		
		$Arq = fopen($titulo, 'ab+');
		while (!feof($Arq)) {$tt = fgets($Arq);}
	
	
	$tweet ="<div id=\"tweet\"><produto>".$produto." - ".$tt."</produto><br/><nome>".htmlspecialchars($nome)."</nome><br/><email>".htmlspecialchars($email)."</email><br/><telefone>".htmlspecialchars($telefone)."</telefone><br/><pedido>".htmlspecialchars($pedido)."</pedido><br/></div><FinalDoBagulho>";									
	
	$Arq = fopen($ped,"ab+");
	fwrite($Arq,$tweet);
	fclose($Arq);
	
	$Arq = fopen($ped2, 'ab+');
	while (!feof($Arq)) {$perg = fgets($Arq);}
	/*if($perg == ''){
		$Arq = fopen($ped2, 'wb+');
		$perg = 1;
		fwrite($Arq,$perg);
	}else{*/
		$perg = $perg + 1;
		$Arq = fopen($ped2, 'wb+');
		fwrite($Arq,$perg);
	//}
	
	header('Location: ../index.php?pedido=ok');

?>