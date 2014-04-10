<?php
	$Arq = fopen("contadores/cont_portalcco.txt", 'rb');
	while (!feof($Arq)) {$cont = fgets($Arq);}
	$cont = $cont+1;
	$Arq = fopen("contadores/cont_portalcco.txt", 'wb');
	fwrite($Arq,$cont);
	
	header('Location: index.php');

?>