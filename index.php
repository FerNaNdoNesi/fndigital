<?php  
	session_start();
	include "php/funcoes.php";
	
	if(isset($_GET['cat'])){
		$_SESSION['codCategoria'] = $_GET['cat'];
		header("Location: home.php");
	}else
	if(isset($_GET['verSlides'])){
		connect(); // incrementa contador
		$sql =  "SELECT slides FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['slides']++;
		$sql =  "UPDATE contadores SET slides='".$row['slides']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		////////////////////////////// contador produto
		$sql =  "SELECT visitas FROM produtos WHERE codigoProduto=".$_GET['verSlides']."";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['visitas']++;
		$sql =  "UPDATE produtos SET visitas='".$row['visitas']."' WHERE codigoProduto=".$_GET['verSlides']."";
		$res = mysql_query($sql);
		
		header("Location: produto.php?codProduto=".$_GET['verSlides']."");
	}else
	if(isset($_GET['verDestaques'])){
		connect(); // incrementa contador
		$sql =  "SELECT destaques FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['destaques']++;
		$sql =  "UPDATE contadores SET destaques='".$row['destaques']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		////////////////////////////// contador produto
		$sql =  "SELECT visitas FROM produtos WHERE codigoProduto=".$_GET['verDestaques']."";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['visitas']++;
		$sql =  "UPDATE produtos SET visitas='".$row['visitas']."' WHERE codigoProduto=".$_GET['verDestaques']."";
		$res = mysql_query($sql);
		
		header("Location: produto.php?codProduto=".$_GET['verDestaques']."");
	}else
	if(isset($_GET['verCategorias'])){
		connect(); // incrementa contador
		$sql =  "SELECT categorias FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['categorias']++;
		$sql =  "UPDATE contadores SET categorias='".$row['categorias']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		////////////////////////////// contador produto
		$sql =  "SELECT visitas FROM produtos WHERE codigoProduto=".$_GET['verCategorias']."";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['visitas']++;
		$sql =  "UPDATE produtos SET visitas='".$row['visitas']."' WHERE codigoProduto=".$_GET['verCategorias']."";
		$res = mysql_query($sql);
		
		header("Location: produto.php?codProduto=".$_GET['verCategorias']."");
	}else
	if(isset($_GET['verPromocoes'])){
		connect(); // incrementa contador
		$sql =  "SELECT promocoes FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['promocoes']++;
		$sql =  "UPDATE contadores SET promocoes='".$row['promocoes']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		////////////////////////////// contador produto
		$sql =  "SELECT visitas FROM produtos WHERE codigoProduto=".$_GET['verPromocoes']."";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['visitas']++;
		$sql =  "UPDATE produtos SET visitas='".$row['visitas']."' WHERE codigoProduto=".$_GET['verPromocoes']."";
		$res = mysql_query($sql);
		
		header("Location: produto.php?codProduto=".$_GET['verPromocoes']."");
	}else
	if(isset($_GET['verLogo'])){
		connect(); // incrementa contador
		$sql =  "SELECT logo FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['logo']++;
		$sql =  "UPDATE contadores SET logo='".$row['logo']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		$_SESSION['codCategoria'] = 0;
		header("Location: home.php");
	}else
	if(isset($_GET['portalpto'])){
		connect(); // incrementa contador
		$sql =  "SELECT pto FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['pto']++;
		$sql =  "UPDATE contadores SET pto='".$row['pto']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		$_SESSION['codCategoria'] = 0;
		header("Location: home.php");
		//header("Location: manutencao.php");
	}else
	if(isset($_GET['portalcco'])){
		connect(); // incrementa contador
		$sql =  "SELECT cco FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['cco']++;
		$sql =  "UPDATE contadores SET cco='".$row['cco']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		$_SESSION['codCategoria'] = 0;
		header("Location: home.php");
		//header("Location: manutencao.php");
	}
	else
	if(isset($_GET['face'])){
		connect(); // incrementa contador
		$sql =  "SELECT face FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['face']++;
		$sql =  "UPDATE contadores SET face='".$row['face']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		$_SESSION['codCategoria'] = 0;
		header("Location: home.php");
		//header("Location: manutencao.php");
	}else{
		connect(); // incrementa contador
		$sql =  "SELECT site FROM contadores WHERE nome='cont'";
		$res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		$row['site']++;
		$sql =  "UPDATE contadores SET site='".$row['site']."' WHERE nome='cont'";
		$res = mysql_query($sql);
		$_SESSION['codCategoria'] = 0;
		header("Location: home.php");
		//header("Location: manutencao.php");
	}
?>