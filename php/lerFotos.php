<?
session_start();

$dir = "produtos/".$_GET['codProduto']."";
# Extensoes permitidas
$exts = array('jpg','png','jpeg','gif','bmp');
if (is_dir($dir)) {
	$onload = "";
	$alb = "";
	$k = 0;
	if ($d = opendir($dir)){
		while (($file = readdir($d))!== false){
			if (filetype($dir.'/'.$file) == 'file'){
				# recupera a extensao do arquivo
				$extensao = explode(".", $file); 
				for($i=0; $i<=count($exts)-1; $i++){
					if($extensao[1] == $exts[$i]){
							$alb .= "<a href=\"$dir/{$file}\" rel=\"ex0\" title=\"\"><img border=\"0\" src=\"thumb.php?img=$dir/{$file}\"></a>\n";
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
