<?php  session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/selecionado.css" rel="stylesheet" type="text/css">
<?php include "php/produtos.php" ?>
<script type="text/javascript">
var max=250;
var ancho=300;
function progresso_tecla(obj) {
  var progresso = document.getElementById("progresso");  
  if (obj.value.length < max) {
    progresso.style.backgroundColor = "#CFC";    
    progresso.style.backgroundImage = "url(img/textarea.png)";    
    progresso.style.color = "#000000";
    var pos = ancho-parseInt((ancho*parseInt(obj.value.length))/250);
    progresso.style.backgroundPosition = "-"+pos+"px 0px";
  } else {
    progresso.style.backgroundColor = "#F30";    
    progresso.style.backgroundImage = "url()";    
    progresso.style.color = "#000000";
  } 
  progresso.innerHTML = "("+obj.value.length+" / "+max+")";
}
</script>
<title>Produto Selecionado</title>
</head>

<body>
	<div id="principal">
    <div id="msg1">Bem - Vindo</div>
    <div id="msg2">
    <li> Nesta área você pode tirar suas duvidas 
    <li> ou então encomendar seu produto
    <li> aguarde que entraremos em contato . . .
    </div>
    	<div id="logo">
            <a href="index.php"> <img src="img/FNDigital_logo.gif" border="0" height="250px"> </a>				
    	</div> <!-- Fim logo2 -->
    <div id="produtos">
        <table border="0px">
           <tr height="300px">
           	<td width="250px">
        		<?php exibe($_GET['cat'],$_GET['prod']);
				$_SESSION['cat'] = $_GET['cat'];
				$_SESSION['prod'] = $_GET['prod'];
				?>
            </td>
           </tr>
        </table>
     </div>
     <div id="formulario">
     	<form action="php/pedido.php" method="get">                       
                Nome: ** <input placeholder="Digite o Seu Nome." type="text" name="nome" size="40" maxlength="30" required /><br/><br/>
                Email: ** <input placeholder="Digite o Seu Email." type="text" name="email" size="40" maxlength="30" required /><br/><br/>
                Telefone: <input placeholder="Digite o Seu Telefone." type="text" name="telefone" size="40" maxlength="30" /><br/><br/>
                <textarea placeholder="Digite aqui sua pergunta ..." onkeyup="progresso_tecla(this)" name="pedido" class="text" rows="10" cols="70" maxlength="250" required></textarea>               
                <div id="progresso">(0 / 250)</div><br/>                
                <input type="submit" value="Enviar" class="botao" />    
            </form>
	</div> <!-- fim formulario -->
    
    
    
    </div> <!-- fim principal -->
</body>
</html>