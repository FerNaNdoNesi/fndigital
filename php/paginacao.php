<style type="text/css">
<!--
.pgoff {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #FF0000; text-decoration: none}
a.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #003366; text-decoration: none}
a:hover.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #0066cc; text-decoration:underline}
-->
</style>
<?php
        $quant_pg = ceil($quantreg/$numreg);
        $quant_pg++;
        echo"<center>";
        // Verifica se esta na primeira página, se nao estiver ele libera o link para anterior
        if ( $_GET['pg'] > 0) { 
			   echo "<a href=".$PHP_SELF."?pg=".($_GET['pg']-1)." class=pg><b>&laquo; anterior</b></a>";
        } else { 
                echo "<font color=#CCCCCC>&laquo; anterior</font>";
        }
        
        // Faz aparecer os numeros das página entre o ANTERIOR e PROXIMO
        for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
                // Verifica se a página que o navegante esta e retira o link do número para identificar visualmente
                if ($_GET['pg'] == ($i_pg-1)) { 
                        echo "&nbsp;<span class=pgoff>[$i_pg]</span>&nbsp;";
                } else {
                        $i_pg2 = $i_pg-1;
                        echo "&nbsp;<a href=".$PHP_SELF."?pg=$i_pg2 class=pg><b>$i_pg</b></a>&nbsp;";
                }
        }
        
        // Verifica se esta na ultima página, se nao estiver ele libera o link para próxima
        if (($_GET['pg']+2) < $quant_pg) { 
                echo "<a href=".$PHP_SELF."?pg=".($_GET['pg']+1)." class=pg><b>proximo &raquo;</b></a>";
        } else { 
                echo "<font color=#CCCCCC>proximo &raquo;</font>";
        }
		echo "</center>";
?>