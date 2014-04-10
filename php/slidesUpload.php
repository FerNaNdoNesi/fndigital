<?php
#error_reporting (E_ALL); 
# author : Rafael Clares  [clares.wordpress.com] 
# Setando as configurações permitidas
$larguraMax = 2000; // largura em pixels
$alturaMax  = 2000; // altura em pixels
$tamanhoMax = 900000; // tamanho em bytes
$formatos   = "pjpeg|jpeg|png|gif|bmp|x-png|jpg"; // extensoes permitidas
# Criando as mensagens de erro
$erro[] = "Tamanho do arquivo maior que o permitido [".($tamanhoMax/1000)." kb].";
$erro[] = "A Largura da imagem maior que o permitido.";
$erro[] = "A Altura da imagem maior que o permitido.";
$erro[] = "O Arquivo já existe no diretório.";
$erro[] = "Formato do arquivo não permitido ou inválido.";

if(isset($_FILES["fotos"]))
{
	function retira_acentos( $texto )
	{
	  $array1 = array(   "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç"
						 , "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç" );
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
			$nomefoto = "fotoSlides.jpg";
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
				# Se o Tamanho do arquivo é permitido
				if($arquivo["size"][$key] > $tamanhoMax)
				{
				# Adiciona o erro no array erros[]
				$erros[] = "[$nomefoto] $erro[0]";
				}
				# Se a Largura do arquivo é permitida
				if($dimensoes[0] > $larguraMax)
				{
				$erros[] = "[$nomefoto] $erro[1]";
				}
				# Se a Altura do arquivo é permitida
				if($dimensoes[1] > $alturaMax)
				{
				$erros[] = "[$nomefoto] $erro[2]";
				}
				# Verifica se o arquivo ja existe no diretorio
				$pastaDoProduto = $_GET['codigo'];
				if(file_exists("produtos/slides/".$pastaDoProduto."/$nomefoto"))
				{
						
				//$erros[] = "[$nomefoto] $erro[3]";
				}	
				# Verifica se extensao é pertida
				/*if(!eregi("^image\/($formatos)$", $arquivo["type"][$key]))
				{
					$erros[] = "[$nomefoto] $erro[4]".$arquivo["type"][$key];
				}*/
				# O array erros nao tiver nenhum indice o upload é permitido/realizado
				if(!isset($erros)){
					@unlink($_GET["produtos/slides/".$pastaDoProduto."/$nomefoto"]);
					$pasta = $_GET['codigo'];
					$imagem_dir = "produtos/slides/".$pastaDoProduto."/".$nomefoto;
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