<?php 
	session_start();
	//session_destroy();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="screen" href="css/jq.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/cycle.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<?php include "php/produtos.php" ?>

<script type="text/javascript">
$(function() {
    $('#slideshow').cycle({
        fx:       'scrollLeft', <!-- estilo da troca -->
        timeout:   4000,
        after:     function() {
            $('#caption').html(this.alt);
        }
    });
});
function fechar(){
document.getElementById('popup').style.display = 'none';
document.getElementById('popup2').style.display = 'none';
document.getElementById('fechar').style.display = 'none';
}

function abrir(){
document.getElementById('popup').style.display = 'block';
document.getElementById('popup2').style.display = 'block';
document.getElementById('fechar').style.display = 'block';
//setTimeout ("fechar()", 3000);
}

</script>
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


<title>FNDigital</title>

</head>

<?php
	if((isset($_GET['cat']) && isset($_GET['prod'])) || isset($_GET['popup'])){
		echo "<body onLoad=\"javascript: abrir();\">";
	}else{
		echo "<body>";
	}
?>
         <div id="principal">
				<div id="logo">
         			<a href="index.php"> <img src="img/FNDigital_logo.gif" border="0" height="300px"></a>				
        		</div> <!-- Fim logo -->
                <?php 
					echo "<div id=\"mensagem\">";
					if(isset($_GET['pedido']) && $_GET['pedido'] == 'ok'){
						echo "<img src=\"img/estrela.png\" height=\"50px\"/>";
						echo "  Pedido solicidado com sucesso!!<br/>";
					}
					echo "</div>";
				?>
            <div id="outdoor">
                <div id="slideshow" class="pics"><!-- TAMANHO DA imagem ajustada em cycles.css -->
                    <img src="img/banner/banner1.png" alt="Beach 1" />
                    <img src="img/banner/banner2.png" alt="Beach 2" />
                    <img src="img/banner/banner3.png" alt="Beach 3" />
                    <img src="img/banner/banner4.png" alt="Beach 4" />    
                    <img src="img/banner/banner5.png" alt="Beach 5" />                                    
    			</div> <!-- Fim slideshow -->
                <div id="menuSuperior">
					<table>
                    	<tr>
                        	<td><a href="index.php"> Pagina Inicial </a></td>
                            <td> | </td>
                            <td><a href="index.php?cat=promocoes"> Promoções </a></td>
                            <td> | </td>                            
                            <td class="QS"><a href="index.php?popup=QuemSomos">Quem somos</a></td>
                        </tr>
                    </table>
                </div> <!-- Fim outdoor -->
        	</div> <!-- Fim outdoor -->
         	<div id="produtos">
                 <table border="0px">
                    <tr height="300px">
                        <td width="250px">
                        	<?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto1');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto1');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto1');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto1');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto1');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto1');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto1');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto1');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto1');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto1');
								}	
                             }else{
                             	exibe('destaque','produto1');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto2');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto2');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto2');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto2');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto2');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto2');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto2');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto2');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto2');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto2');
								}	
                             }else{
                             	exibe('destaque','produto2');
                             }?> 
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto3');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto3');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto3');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto3');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto3');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto3');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto3');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto3');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto3');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto3');
								}
                             }else{
                             	exibe('destaque','produto3');
                             }?> 
                        </td>
                    </tr>
                    <tr height="300px">
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto4');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto4');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto4');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto4');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto4');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto4');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto4');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto4');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto4');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto4');
								}	
                             }else{
                             	exibe('destaque','produto4');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto5');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto5');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto5');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto5');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto5');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto5');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto5');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto5');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto5');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto5');
								}
                             }else{
                             	exibe('destaque','produto5');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto6');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto6');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto6');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto6');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto6');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto6');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto6');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto6');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto6');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto6');
								}	
                             }else{
                             	exibe('destaque','produto6');
                             }?> 
                        </td>
                    </tr>
                    <tr height="300px">
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto7');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto7');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto7');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto7');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto7');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto7');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto7');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto7');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto7');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto7');
								}	
                             }else{
                             	exibe('destaque','produto7');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto8');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto8');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto8');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto8');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto8');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto8');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto8');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto8');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto8');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto8');
								}	
                             }else{
                             	exibe('destaque','produto8');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto9');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto9');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto9');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto9');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto9');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto9');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto9');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto9');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto9');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto9');
								}	
                             }else{
                             	exibe('destaque','produto9');
                             }?> 
                        </td>
                    </tr>
                    <tr height="300px">
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto10');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto10');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto10');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto10');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto10');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto10');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto10');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto10');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto10');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto10');
								}	
                             }else{
                             	exibe('destaque','produto10');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto11');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto11');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto11');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto11');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto11');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto11');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto11');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto11');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto11');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto11');
								}	
                             }else{
                             	exibe('destaque','produto11');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto12');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto12');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto12');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto12');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto12');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto12');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto12');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto12');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto12');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto12');
								}	
                             }else{
                             	exibe('destaque','produto12');
                             }?> 
                        </td>
                    </tr>
                    <tr height="300px">
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto13');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto13');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto13');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto13');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto13');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto13');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto13');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto13');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto13');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto13');
								}	
                             }else{
                             	exibe('destaque','produto13');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto14');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto14');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto14');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto14');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto14');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto14');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto14');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto14');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto14');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto14');
								}	
                             }else{
                             	exibe('destaque','produto14');
                             }?>
                        </td>
                        <td width="250px"> 
                            <?php
							if(isset($_GET['cat'])){
								if($_GET['cat'] == 'bebidas'){
							 		exibe('bebidas','produto15');
								}else
								if($_GET['cat'] == 'celulares'){
							 		exibe('celulares','produto15');
								}else
								if($_GET['cat'] == 'diversos'){
							 		exibe('diversos','produto15');
								}else
								if($_GET['cat'] == 'eletronicos'){
							 		exibe('eletronicos','produto15');
								}else
								if($_GET['cat'] == 'informatica'){
							 		exibe('informatica','produto15');
								}else
								if($_GET['cat'] == 'roupas'){
							 		exibe('roupas','produto15');
								}else
								if($_GET['cat'] == 'veiculos'){
							 		exibe('veiculos','produto15');
								}else
								if($_GET['cat'] == 'roupas_femininas'){
							 		exibe('roupas_femininas','produto15');
								}else
								if($_GET['cat'] == 'roupas_masculinas'){
							 		exibe('roupas_masculinas','produto15');
								}else
								if($_GET['cat'] == 'promocoes'){
							 		exibe('promocoes','produto15');
								}	
                             }else{
                             	exibe('destaque','produto15');
                             }?> 
                        </td>
                    </tr>
                 </table>
         </div> <!-- Fim produtos -->
         <div id="menuLateral">
         	<div class="navbox">
                <ul class="nav">
                    <li><a href="index.php?cat=veiculos">Auto Som</a></li>                
                    <li><a href="index.php?cat=bebidas">Bebidas</a></li>                    
                    <li><a href="index.php?cat=celulares">Celulares</a></li>
                    <li><a href="index.php?cat=diversos">Diversos</a></li>
                    <li><a href="index.php?cat=eletronicos">Eletrônicos</a></li>                          
                    <li><a href="index.php?cat=informatica">Informática</a></li>
                    <li><a href="index.php?cat=roupas">Roupas</a></li>
                    <li><a href="index.php?cat=roupas_femininas">Roupas Fem.</a></li>
                    <li><a href="index.php?cat=roupas_masculinas">Roupas Masc.</a></li>                                        
                </ul>
            </div>
         </div> <!-- Fim menuLateral -->
             <div id="rodape">
                <a href="login.php"> <img src="img/privacidade.png" border="0" height="40px"> </a>
                 ® Desenvolvimento de webSites
             </div>
         </div> <!-- Fim principal -->
         <div id="popup" onClick="fechar();"> 
    
		</div> <!-- Fim popup -->
        <div id="popup2">
        	<div id="faixa"> 
        		<div id="fechar"> <a href="javascript: fechar();"> <img src="img/error.png" border="0" height="30px"><!--fechar--></a></div>
        	</div> <!-- Fim faixa --> 

            <?php
				if(isset($_GET['cat']) && isset($_GET['prod'])){
					$_SESSION['cat'] = $_GET['cat'];
					$_SESSION['prod'] = $_GET['prod'];
					select ($_GET['cat'], $_GET['prod']);
					
            echo" <div id=\"msg1\">Seja Bem - Vindo a loja FNDigital</div>
                <div id=\"msg2\">
				<table>
				<tr>
					<td><li> Está é uma área de interação de nossos futuros e  atuais clientes.</td>
                	<td><li> Sinta-se a vontade para tirar suas duvidas de nossos produtos. </td>
				</tr>
				</table><br/><br/>
				<table>
					<tr><td class=\"maior\"><li> Você pode também deixar seu contato e seu pedido,<br/> 
					entraremos em contato via e-mail para combinarmos<br/> a entrega pessoalmente em seu endereço.</td></tr>
					<tr><td>MSN / email: FNDigital@hotmail.com</td></tr>
					
				</table>

            </div>
			<div id=\"formulario\">
				<form class=\"fof\" action=\"php/pedido.php\" method=\"get\">                       
				Nome: ** <input placeholder=\"Digite o Seu Nome.\" type=\"text\" name=\"nome\" size=\"40\" maxlength=\"30\" required /><br/><br/>
				Email: ** <input placeholder=\"Digite o Seu Email.\" type=\"text\" name=\"email\" size=\"40\" maxlength=\"30\" required /><br/><br/>
				Telefone: <input placeholder=\"Digite o Seu Telefone.\" type=\"text\" name=\"telefone\" size=\"40\" maxlength=\"30\" /><br/><br/>
				Pergunta: <input placeholder=\"Digite aqui sua pergunta ...\" type=\"text\" onkeyup=\"progresso_tecla(this)\" name=\"pedido\" size=\"40\" maxlength=\"250\" /><br/><br/><div id=\"progresso\">(0 / 250)</div><br/>                
				<input type=\"submit\" value=\"Enviar\" class=\"botao\" />    
				</form>
				</div> ";
	  		}else if(isset($_GET['popup']) && $_GET['popup'] == 'QuemSomos'){
					echo "<div id=\"msg1\">Bem - Vindo ao Grupo FNDigital </div>
					<div id=\"msg2\"><br/>
						<table>
							<tr>
								<td class=\"tablet\">
								<li class=\"link\"> Facebook: <a href=\"https://www.facebook.com/fndigital.fndigital\"/> www.facebook.com/fndigital <img src=\"img/facebook.png\" height=\"70px\" border=\"0\"/> <a>
								</td>
								<td class=\"tablet\"><li> MSN: <ww>FNDigital@hotmail.com</ww> <img src=\"img/msn.png\" height=\"70px\" border=\"0\"/></td>
							</tr>
						</table><br/><br/>	
						<table>							
							<tr>
								<td class=\"tablet\"><br/><br/><li>Nosso site possui diversas categorias de produtos: </td>
								<td class=\"tablet\"><li>Auto Som<li>Bebidas<li>Celulares<li>Diversos</td>
								<td class=\"tablet\"><li>Eletrônicos<li>Informática<li>Roupas Masculinas<li>Roupas Fermininas</td>								
							</tr>
						</table>
						<br/><br/><br/>
						<table>							
							<tr>
								<td class=\"tablet\"><li> Na Loja online FNDigital você seleciona o produto desejado,
						e nos envia sua duvida sobre o produto ou faz seu pedido que entraremos em contato para negociação e entrega pessoalmente da encomenda.  </td><td>
						<li> Aproveite também se estiver precisando de algum produto, faça-nos um pedido que entraremos em contato ...
						</td>
						</tr>
						</table>
						<br/><br/><li>
						<img src=\"img/informatica.png\" height=\"70px\">
						<img src=\"img/promocoes.png\" height=\"70px\">
						<img src=\"img/diversos.png\" height=\"70px\">
						<img src=\"img/eletronico.png\" height=\"70px\">
						<img src=\"img/promocao.png\" height=\"70px\">
						<img src=\"img/telefone.png\" height=\"70px\">	
						<img src=\"img/campeao.png\" height=\"70px\">	
						<img src=\"img/moto.png\" height=\"70px\">
						<img src=\"img/predio.png\" height=\"70px\">
						<img src=\"img/casa.png\" height=\"70px\">
												
						
					</div>";
				}
				?> <!-- fim formulario -->  
        </div> <!-- Fim popup2 -->
</body>
</html>
