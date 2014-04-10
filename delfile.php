<?
@session_start();

	if(file_exists($_GET['file'])){
		//$_GET['file'] = "../".$_GET['file'];
		@unlink($_GET['file']);
	}
//echo $_GET['file']."<br/><br/><br/><br/>";
// negative limit (since PHP 5.1)
$num = explode('/', $_GET['file'], -1);

//echo "<br/>".$num[1];
 //header("Location: ../administrador.php?op=5&codigoProduto=\".$num.\"");
@header("Location: administrador.php?op=5&codigoProduto=".$num[1]."");	

?>