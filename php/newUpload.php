<?php
#error_reporting (E_ALL); 
# author : Rafael Clares  [clares.wordpress.com] 
# Setando as configura��es permitidas
$larguraMax = 2000; // largura em pixels
$alturaMax  = 2000; // altura em pixels
$tamanhoMax = 900000; // tamanho em bytes
$formatos   = "pjpeg|jpeg|png|gif|bmp|x-png|jpg"; // extensoes permitidas
# Criando as mensagens de erro
$erro[] = "Tamanho do arquivo maior que o permitido [".($tamanhoMax/1000)." kb].";
$erro[] = "A Largura da imagem maior que o permitido.";
$erro[] = "A Altura da imagem maior que o permitido.";
$erro[] = "O Arquivo j� existe no diret�rio.";
$erro[] = "Formato do arquivo n�o permitido ou inv�lido.";

if(isset($_FILES["fotos"]))
{
	function retira_acentos( $texto )
	{
	  $array1 = array(   "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�"
						 , "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�", "�" );
	  $array2 = array(   "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c"
						 , "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C" );
	  return str_replace( $array1, $array2, $texto );
	} 
	
	foreach ($_FILES["fotos"]["name"] as $key => $name) 
	{
		if(!empty($_FILES["fotos"]))
		{
			$arquivo   = $_FILES["fotos"];
			if($arquivo["tmp_name"][$key])
			$dimensoes = getimagesize($arquivo["tmp_name"][$key]);
			$nomefoto  = strtolower($_FILES["fotos"]["name"][$key]);
			$nomefoto = "fotoNew.jpg";
			// $nomefoto = retira_acentos($nomefoto);
			#Verificando se a imagem foi enviada
			if($arquivo["name"][$key] != "")
			{
				# Retirando espacos no nome do arquivo
				$espacos = explode(" ",$nomefoto);
				if(count($espacos) > 1)
				{
					$nomefoto = strtolower(ereg_replace(' ', '_', $nomefoto));
				}		
				# Se o Tamanho do arquivo � permitido
				if($arquivo["size"][$key] > $tamanhoMax)
				{
				# Adiciona o erro no array erros[]
				$erros[] = "[$nomefoto] $erro[0]";
				}
				# Se a Largura do arquivo � permitida
				if($dimensoes[0] > $larguraMax)
				{
				$erros[] = "[$nomefoto] $erro[1]";
				}
				# Se a Altura do arquivo � permitida
				if($dimensoes[1] > $alturaMax)
				{
				$erros[] = "[$nomefoto] $erro[2]";
				}
				# Verifica se o arquivo ja existe no diretorio
				$pastaDoProduto = $_GET['codigo'];
				if($_GET['op'] == 22){
					$foto = 'foto1';
				}
				if($_GET['op'] == 23){
					$foto = 'foto2';
				}
				if(file_exists("produtos/new/".$pastaDoProduto."/".$foto."/$nomefoto"))
				{
					//@unlink($_GET["produtos/new/".$pastaDoProduto."/".$foto."/$nomefoto"]);	
				//$erros[] = "[$nomefoto] $erro[3]";
				}	
				# Verifica se extensao � pertida
				/*if(!eregi("^image\/($formatos)$", $arquivo["type"][$key]))
				{
					$erros[] = "[$nomefoto] $erro[4]".$arquivo["type"][$key];
				}*/
				# O array erros nao tiver nenhum indice o upload � permitido/realizado
				if(!isset($erros)){
					@unlink($_GET["produtos/new/".$pastaDoProduto."/".$foto."/$nomefoto"]);	
					$pasta = $_GET['codigo'];
					$imagem_dir = "produtos/new/".$pastaDoProduto."/".$foto."/".$nomefoto;
					move_uploaded_file($_FILES["fotos"]["tmp_name"][$key], $imagem_dir);
					$sucesso[] = "[$nomefoto] upload com sucesso.";
					echo "<script>atualizar();</script>";
				}
			}
		}
	}
	# Verifica se existem erros  no array
    if(isset($erros))
    {
		echo "<ul class='erro'>";
        foreach($erros as $erro)
        {
			echo "<p><span>$erro</span></p>";
		}
		echo "</ul>";
	}
	# Verifica quais imagens tiveram sucesso no upload
    if(isset($sucesso))
    {
		echo "<ul class='sucesso'>";
        foreach($sucesso as $up)
        {
			echo "<p><span>$up</span></p>";
		}
		echo "</ul>";
	}
}
?>