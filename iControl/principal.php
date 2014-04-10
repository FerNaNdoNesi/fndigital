<?php $vlr=' 00,00'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="Shortcut Icon" href="img/logo.gif"/>
<link rel="stylesheet" type="text/css" href="css/estilo1.css" />
<title>iControl - Controle seu orçamento</title>
</head>

<body>
	
    <div id="fundoPrincipal">
    
    </div>
	<div id="principal">
    	<div id="status">
        	<ul>status
        </div>
        <div id="entradas">
            <?php echo"
            <form>
	            <table bordercolor='#FFFFFF' border='0'><tr>";
				for($x=1;$x<=4;$x++){ 
					echo"
					<td width='0px'></td>
                    <td>Entradas<br/><input type='text' readonly='readonly' name='text_1' value='R$ ".$vlr." '></td>
                    <td><a href='#'><img class='botao' src='img/calc.png'/></a></td>";
					if($x % 2 == 0){
						echo"</tr><tr>";
					}
				}
				echo"</tr>
				</table>
            </form>
			";?>
        </div>
        <div id="bancos">
            <?php echo"
            <form>
	            <table bordercolor='#FFFFFF' border='0'><tr>";
				for($x=1;$x<=4;$x++){ 
					echo"
					<td width='0px'></td>
                    <td>Banco<br/><input type='text' readonly='readonly' name='text_1' value='R$ ".$vlr." '></td>
                    <td><a href='#'><img class='botao' src='img/calc.png'/></a></td>";
					if($x % 2 == 0){
						echo"</tr><tr>";
					}
				}
				echo"</tr>
				</table>
            </form>
			";?>
        </div>
        <div id="saidas">
            <?php echo"
            <form>
	            <table bordercolor='#FFFFFF' border='0'><tr>";
				for($x=1;$x<=21;$x++){ 
					echo"
					<td width='0px'></td>
					<td>Gasto com </td>
                    <td><input type='text' readonly='readonly' name='text_1' value='R$ ".$vlr." '></td>
                    <td><a href='#'><img class='botao' src='img/calc.png'/></a></td>";
					if($x % 3 == 0){
						echo"</tr><tr>";
					}
				}
				echo"</tr>
				</table>
            </form>
			";?>
        </div>
    
    
    
    </div>
</body>
</html>