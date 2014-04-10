<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="iso-8859-1">
<title>Acompanhe pedidos de Clientes</title>
<link href="css/estiloCLI.css" rel="stylesheet" type="text/css">
</head>

<body>
	<a href="administrador.php"><img src="img/voltando.gif" height="40px"/></a>
	<div id="principal">
    	
    	<div id="bebidas">
        <categoria> Bebidas </categoria>
			<?php
                $Arq = fopen('pedidos/bebidas.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                    
                }
				$Arq = fopen('contadores/bebidas_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/bebidas_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";		
                }
            ?>      
        </div>
        
        <div id="celulares">
        <categoria> Celulares </categoria>
			<?php
                    $Arq = fopen('pedidos/celulares.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                    
                }
				$Arq = fopen('contadores/celulares_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/celulares_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";	
                }
            ?>      
        </div>
        
        <div id="diversos">
        <categoria> Diversos </categoria>
			<?php
                    $Arq = fopen('pedidos/diversos.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                    
                }
				$Arq = fopen('contadores/diversos_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/diversos_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";	
                }
            ?>      
        </div>
        
        <div id="eletronicos">
        <categoria> Eletrônicos </categoria>
			<?php
                    $Arq = fopen('pedidos/eletronicos.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                }
				$Arq = fopen('contadores/eletronicos_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/eletronicos_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";	
                }
            ?>      
        </div>
        
        <div id="informatica">
        <categoria> Informática </categoria>
			<?php
                    $Arq = fopen('pedidos/informatica.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                    
                }
				$Arq = fopen('contadores/informatica_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/informatica_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";	
                }
            ?>      
        </div>
        
        <div id="roupas">
    	<categoria> Roupas </categoria>        
			<?php
                    $Arq = fopen('pedidos/roupas.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                }
				$Arq = fopen('contadores/roupas_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/roupas_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";
                }
            ?>      
        </div>
        
        <div id="veiculos">
    	<categoria> Auto Som </categoria>        
			<?php
                    $Arq = fopen('pedidos/veiculos.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);    
                }
				$Arq = fopen('contadores/veiculos_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/veiculos_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";
                }
            ?>      
        </div>
        
        <div id="roupas_femininas">
    	<categoria> Roupas Femininas </categoria>        
			<?php
                    $Arq = fopen('pedidos/roupas_femininas.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                }
				$Arq = fopen('contadores/roupas_femininas_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/roupas_femininas_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";
                }
            ?>      
        </div> 
        
        <div id="roupas_masculinas">
    	<categoria> Roupas Masculinas </categoria>        
			<?php
                    $Arq = fopen('pedidos/roupas_masculinas.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                    
                }
				$Arq = fopen('contadores/roupas_masculinas_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/roupas_masculinas_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";
                }
            ?>      
        </div>
        
        <div id="destaque">
    	<categoria> Destaque </categoria>        
			<?php
                    $Arq = fopen('pedidos/destaque.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
                }
				$Arq = fopen('contadores/destaque_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/destaque_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";
                }
            ?>      
        </div>
        
        <div id="promocoes">
    	<categoria> Promoções </categoria>        
			<?php
				$x = 0;
                    $Arq = fopen('pedidos/promocoes.txt', 'rb');
                while (!feof($Arq)) {// enquando nao for o fim de arq
                    $tweet = fgets($Arq); // lendo de cada linha
                    $cada = explode("<FinalDoBagulho>",$tweet);
					$x++;
                    
                }$Arq = fopen('contadores/promocoes_cont.txt', 'ab+');
				while (!feof($Arq)) {$cont = fgets($Arq);}
				if($cont == ''){
					$Arq = fopen('contadores/promocoes_cont.txt', 'wb+');
					$cont = 0;
					fwrite($Arq,$cont);
				}				
                for($i=$cont;$i>=0;$i--){
                    echo $cada[$i];
					echo "<br/><hr width=\"90%\" noshade>";
                }
            ?>      
        </div>      
    </div>

</body>
</html>