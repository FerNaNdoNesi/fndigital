<?php
	$Arq = fopen("contadores/cont_portalpto.txt", 'ab+');
	while (!feof($Arq)) {$cont = fgets($Arq);}
	if($cont == ''){
		$Arq = fopen("contadores/cont_portalpto.txt", 'wb');
		$cont = 0; 	
		fwrite($Arq,$cont);
	}else{
		$cont = $cont+1;
		$Arq = fopen("contadores/cont_portalpto.txt", 'wb');
		fwrite($Arq,$cont);
	}
	
	header('Location: index.php');

?>