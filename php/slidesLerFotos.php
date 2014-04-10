<?
session_start();

$dir = "produtos/slides/".$_GET['codigo']."";
# Extensoes permitidas
$exts = array('jpg','png','jpeg','gif','bmp');
if (is_dir($dir)) {
	$onload = "";
	$alb = "";
	$k = 0;
	if ($d = opendir($dir))
	{
		while (($file = readdir($d))!== false)
		{
			if (filetype($dir.'/'.$file) == 'file')
			{
				# recupera a extensao do arquivo
				$extensao = explode(".", $file); 
				for($i=0; $i<=count($exts)-1; $i++)
				{
					if($extensao[1] == $exts[$i])
					{
						/*if(!isset($_SESSION['logado']))
						{
							# Criando o link da imagem pra o lightbox e exibindo a thumb
							$alb .= "<a href=\"$dir/{$file}\" rel=\"ex0\" title=\"\"><img border=\"0\" src=\"thumb.php?img=$dir/{$file}\"></a>\n";
						}
						else
						{*/
							# Criando o link da imagem pra excluir a imagem
							//$alb .=  "<a href=\"javascript:drop('$dir/{$file}')\"> <img src=\"thumb.php?img=$dir/{$file}\" class=\"thumb\"></a>\n";		
							$alb .= "<a href=\"$dir/{$file}\" rel=\"ex0\" title=\"\"><img border=\"0\" src=\"thumb.php?img=$dir/{$file}\"></a>";
							//$alb .= "<img src=\"img/error.png\" style=\"cursor:pointer\" title=\"remover foto\" border=\"0\" height=\"15\" onclick=\"slidesDrop('$dir/{$file}')\">\n";	
						//}
					}
				}
			}
			$onload .= " $(\"a[rel='ex$k']\").colorbox();\n";
		}
		closedir($d);
	}
}
?>
<script>
	$(document).ready(function(){
		<?=$onload?>
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
</script>

<?=$alb?>
