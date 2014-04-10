<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>FNDigital</title>
    <link rel="Shortcut Icon" href="img/logo.gif" />
    <link rel="stylesheet" type="text/css" href="css/estilo1.css" />
	<link rel="stylesheet" media="all" type="text/css" href="css/menuSuperior.css" />
    <link rel="stylesheet" type="text/css" href="css/menuVertical.css" />
    <link rel="stylesheet" type="text/css" href="css/estiloPaginationButtom.css" />
    <?php include "php/funcoes.php" ?>
    <!-- promoções -->
    <link rel="stylesheet" type="text/css" href="css/estiloPromocoes.css" />
    <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>  
	<script type="text/javascript">
		$(function() {
			$('.temphol').hover(function() {
				$(this).children('.front').stop().animate({ "top" : '160px'}, 500);   
			}, function() {
				$(this).children('.front').stop().animate({ "top" : '7px'}, 300);       
			});
		});
	</script>
    <!-- promoções -->
    <!-- slideshow -->
        <link rel="stylesheet" type="text/css" href="css/estiloSlideShow.css" />
        <script type="text/javascript" src="js/jquery.min.js" ></script>
        <script type="text/javascript" src="js/jquery-ui.min.js" ></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
            });
        </script>
    <!-- slideshow -->
    <!-- popUp -->
    	<script type="text/javascript">
			function fechar(){
			document.getElementById('popUp').style.display = 'none';
			document.getElementById('popUp2').style.display = 'none';
			document.getElementById('popUp3').style.display = 'none';
			document.getElementById('fechar').style.display = 'none';
			}
			
			function abrir(){
			document.getElementById('popUp').style.display = 'block';
			document.getElementById('popUp2').style.display = 'block';
			document.getElementById('popUp3').style.display = 'block';
			document.getElementById('fechar').style.display = 'block';
			//setTimeout ("fechar()", 3000);
			}
			function fecharMsg(){
			document.getElementById('popUpMsg').style.display = 'none';
			document.getElementById('popUp2Msg').style.display = 'none';
			document.getElementById('popUp3Msg').style.display = 'none';
			document.getElementById('fecharMsg').style.display = 'none';
			location.href="home.php";
			}
			
			function abrirMsg(){
			document.getElementById('popUpMsg').style.display = 'block';
			document.getElementById('popUp2Msg').style.display = 'block';
			document.getElementById('popUp3Msg').style.display = 'block';
			document.getElementById('fecharMsg').style.display = 'block';
			//setTimeout ("fechar()", 3000);
			}			
		</script>    
    <!-- popUp -->
    <!-- CONTADOR -->
    <script type="text/javascript">
		var max=300;
		var ancho=300;
		function progresso_tecla(obj) {
		  var progresso = document.getElementById("progresso");  
		  if (obj.value.length < max) {
			progresso.style.backgroundColor = "#CFC";    
			progresso.style.backgroundImage = "url(img/textarea.png)";    
			progresso.style.color = "#000000";
			var pos = ancho-parseInt((ancho*parseInt(obj.value.length))/300);
			progresso.style.backgroundPosition = "-"+pos+"px 0px";
		  } else {
			progresso.style.backgroundColor = "#F30";    
			progresso.style.backgroundImage = "url()";    
			progresso.style.color = "#000000";
		  } 
		  progresso.innerHTML = "("+obj.value.length+" / "+max+")";
		}
	</script><!-- CONTADOR -->
</head>
<?php
	if(isset($_GET['popUp'])){
		echo "<body onLoad=\"javascript: abrir();\">";
	}else
	if(isset($_GET['popUpMsg'])){
		echo "<body onLoad=\"javascript: abrirMsg();\">";
	}else{
		echo "<body>";
	}
?>
    	<div id="backgroundLogo1">
    		<div id="backgroundLogo2">
    		<center><a href="index.php?verLogo=true"><img src="img/logo.gif" border="0"/></a></center>
    		</div>
    	</div>
        <div id="topo">
            <div class="compre">
                <br/>Seja Bem-Vindo a nossa loja, confira nossos produtos...
				
                <br/>Msn: 
                fndigital@hotmail.com <img src="img/msn.png" height="50px" border="0"/> 
                               
                
                <br/><a href="https://www.facebook.com/fndigital.fndigital" target="_blank"/>
                            	www.facebook.com/fndigital <img src="img/facebook.png" height="50px" border="0"/> 
                     </a>
                               
            </div>
            <div class="atendimento">
               <a href="home.php?popUp=atendimento"><img src="img/atendimento_online.png" border="0"/></a>
            </div>      
        </div>
        <div id="menuSuperiorFundo"> </div>
        <div id="menuSuperior" style="margin-left:50px;">
            <ul id="menu">
                <li><a href="index.php?verLogo=true">Home</a></li>
                <li> | </li>
                <li><a href="index.php?cat=2">Bebidas</a></li>
                <li> | </li>
                <li><a href="index.php?cat=3">Celulares</a></li>
                <li> | </li>
                <li><a href="index.php?cat=5">Eletrônicos</a></li>
                <li> | </li>
                <li class="verde">Categorias
                    <ul id="help">
                        <li>
                            <img class="corner_inset_left" alt="" src="imgMenuSup/corner_inset_left.png"/>
                            <table><tr>
                                <td><a href="index.php?cat=1">Auto Som</a></td>
                                <td>|</td>
                                <td><a href="index.php?cat=2">Bebidas</a></td>
                                <td>|</td>
                                <td><a href="index.php?cat=3">Celulares</a></td>
                            </tr></table>
                            <img class="corner_inset_right" alt="" src="imgMenuSup/corner_inset_right.png"/>
                        </li>
                        <li>
                            <table><tr>
                                <td><a href="index.php?cat=4">Diversos</a></td>
                                <td>|</td>
                                <td><a href="index.php?cat=5">Eletr&ocirc;nicos</a></td>
                                <td>|</td>
                                <td><a href="index.php?cat=6">Inform&aacute;tica</a></td>
                            </tr></table>
                        </li>
                        <li>
                            <table><tr>
                                <td><a href="index.php?cat=7">Perfumes</a></td>
                                <td>|</td>
                                <td><a href="index.php?cat=8">Camisetas de Time</a></td>
                                <td>|</td>
                                <td><a href="index.php?cat=9">Acessórios para Moto</a></td>
                            </tr></table>
                        </li>
                        <li class="last">
                            <img class="corner_left" alt="" src="imgMenuSup/corner_left.png"/>
                            <img class="middle" alt="" src="imgMenuSup/dot.gif"/>
                            <img class="corner_right" alt="" src="imgMenuSup/corner_right.png"/>
                        </li>
                    </ul>
                </li>
                <li> | </li>
                <li><a href="index.php?cat=6">Informática</a></li>
                <li> | </li>
                <li><a href="index.php?cat=7">Perfumes</a></li>
                <li> | </li>
                <li><a href="home.php?popUp=atendimento">Fale Conosco</a></li>
                <li class="searchContainer">
                    <div>
                    <input type="text" id="searchField" />
                    <img src="imgMenuSup/magnifier.png" alt="Search" onclick="alert('You clicked on search button')" /></div>
                </li>
            </ul>
           <!-- <img style="float:left;" alt="" src="imgMenuSup/menu_right.png"/> -->
        </div> <!-- fim menuSuperior -->

        <div id="e-commerce"> 
        	<div id="left">
            	<div id="leftDestaques"><hr/> D e s t a q u e s </div> <!-- fim leftDestaques -->
                <div id="destaques1">
                	<div id="destaques2">
                    	<div id="destaquesTOP"> </div> <!-- fim destaquesTOP -->
                    </div> <!-- fim destaques2 -->
                    <?php
						destaques();
					?>
                </div> <!-- fim destaques1 -->
                
                
            </div> <!-- fim left -->
            <div id="right">
            	<div id="rightCategorias"><hr/> C a t e g o r i a s </div> <!-- fim rightCategorias -->
            	<ul class="svertical">
                    <li><a href="index.php?cat=1">A u t o  S o m</a></li>                
                    <li><a href="index.php?cat=2">B e b i d a s</a></li>                    
                    <li><a href="index.php?cat=3">C e l u l a r e s</a></li>
                    <li><a href="index.php?cat=4">D i v e r s o s</a></li>
                    <li><a href="index.php?cat=5">E l e t r &ocirc; n i c o s</a></li>                          
                    <li><a href="index.php?cat=6">I n f o r m &aacute; t i c a</a></li>
                    <li><a href="index.php?cat=7">P e r f u m e s</a></li>
                    <li><a href="index.php?cat=8">Camisetas de Times</a></li>
					<li><a href="index.php?cat=9">Acessórios p/ Moto</a></li> 		
                </ul>
            </div> <!-- fim right -->
            <div id="center">
            <div id="centerTop">
            	<div style="float:none; clear:both;"></div>
                <div id="featured" >
                    <ul class="ui-tabs-nav">
                        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="produtos/slides/1/fotoSlides.jpg" alt="" height="50px" />
                        <span><? slidesTitulo('1'); ?></span></a></li>
                        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="produtos/slides/2/fotoSlides.jpg" alt="" height="50px" />
                        <span><? slidesTitulo('2'); ?></span></a></li>
                        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="produtos/slides/3/fotoSlides.jpg" alt="" height="50px" />
                        <span><? slidesTitulo('3'); ?></span></a></li>
                        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="produtos/slides/4/fotoSlides.jpg" alt="" height="50px" />
                        <span><? slidesTitulo('4'); ?></span></a></li>
                    </ul>
        
                    <!-- First Content -->
                    <div id="fragment-1" class="ui-tabs-panel" style="">
                        <img src="produtos/slides/1/fotoSlides.jpg" width="400px" alt="" />
                         <div class="info" >
                            <h2><a href="index.php?verSlides=<? slidesCodigoProduto('1');?>" ><? slidesTitulo('1'); ?></a></h2>
                            <p><? slidesDescricao('1'); ?></p>
                         </div>
                    </div>
            
                    <!-- Second Content -->
                    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
                        <img src="produtos/slides/2/fotoSlides.jpg" width="400px" alt="" />
                         <div class="info" >
                            <h2><a href="index.php?verSlides=<? slidesCodigoProduto('2');?>" ><? slidesTitulo('2');?></a></h2>
                            <p><? slidesDescricao('2');?></p>
                         </div>
                    </div>
            
                    <!-- Third Content -->
                    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
                        <img src="produtos/slides/3/fotoSlides.jpg" width="400px" alt="" />
                         <div class="info" >
                            <h2><a href="index.php?verSlides=<? slidesCodigoProduto('3');?>" ><? slidesTitulo('3'); ?></a></h2>
                            <p><? slidesDescricao('3'); ?></p>
                         </div>
                    </div>
            
                    <!-- Fourth Content -->
                    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
                        <img src="produtos/slides/4/fotoSlides.jpg" width="400px" alt="" />
                         <div class="info" >
                            <h2><a href="index.php?verSlides=<? slidesCodigoProduto('4');?>" ><? slidesTitulo('4'); ?></a></h2>
                            <p><? slidesDescricao('4'); ?></p>
                         </div>
                    </div> <!-- fim Fouth Content -->
        		</div> <!-- fim featured -->
            </div> <!-- fim centerTop -->
            <div id="centerCentro"><hr /><cat>Categoria:</cat><? categoria();?></div> <!-- fim centerCentro -->
            <div id="centerAll">
				<?php
					//$_SESSION['categoria'] = "celulares";
					produtosTable();				
                ?>
            </div> <!-- fim centerAll -->
            
            </div> <!-- fim center -->
            <div id="bottom">
            <?php 
				newtable();
			?>
            </div> <!-- fim bottom -->
        </div> <!-- fim e-commerce -->
        <div id="rodapeTop">
        	<center>
        	<table>
                <tr>
                    <td><a href="index.php?cat=1">Auto Som</a></td>
                   <td>|</td>
                   <td><a href="index.php?cat=2">Bebidas</a></td>
                   <td>|</td>
                   <td><a href="index.php?cat=3">Celulares</a></td>
                   <td>|</td>
                   <td><a href="index.php?cat=4">Diversos</a></td>
                   <td>|</td>
                   <td><a href="index.php?cat=5">Eletr&ocirc;nicos</a></td>
                   <td>|</td>
                   <td><a href="index.php?cat=6">Inform&aacute;tica</a></td>
                   <td>|</td>
                   <td><a href="index.php?cat=7">Roupas/Acessórios</a></td>
                   <td>|</td>
                   <td><a href="login.php">Login</a></td>
                 </tr>
             </table> 
            </center>
        </div> <!-- fim rodapeTop -->
        <div id="rodape">
        	
        </div> <!-- fim rodape -->
        
        <div id="popUp" onClick="fechar();"> 
    
		</div> <!-- Fim popup -->
        <div id="popUp2">
        
        </div> <!-- Fim popup2 -->
        <div id="popUp3">
        	<div id="faixa"> 
        		<div id="fechar"> <a href="javascript: fechar();"> <img src="img/error.png" border="0"><!--fechar--></a></div>
        	</div> <!-- Fim faixa -->
            <?php 
				if(isset($_GET['popUp']) && $_GET['popUp'] == 'atendimento'){
					echo"
					<div class='titulo'>
					 ATENDIMENTO 
					</div>
					<div class='texto'>
						Bem vindo ao Atendimento, no momento estamos <b>off-line</b> entre em contato:
						<br/> <li> msn: <b>fndigital@hotmail.com</b>
						<br/> <li> email: <b>vendas.fndigital@gmail.com</b>
						<br/> <ul>
								<li><b>(46)</b> 9132-4212 <img src=\"img/vivo.jpg\">
							  	<li><b>(46)</b> 8412-5315 <img src=\"img/oi.png\">
								<li><b>(46)</b> 9931-3626 <img src=\"img/tim.png\">
								<li><b>(46)</b> 8823-8364 <img src=\"img/claro.jpg\">
							</ul>
						<li> Se preferir preencha o formulário abaixo, iremos responder o mais rápido possível.
					</div>	
					<div class='formulario'>
						<form action=\"php/atendimento.php?link=home.php\" method=\"post\">
						<table>
							<tr>
							<td>Nome:</td>
							<td><input placeholder=\"Seu nome..\" type=\"text\" name=\"nome\" size=\"40\" maxlength=\"80\"/></td>
							</tr>
							<tr>
							<td>Telefone:</td>
							<td><input placeholder=\"Seu telefone..\" type=\"text\" name=\"telefone\" size=\"40\" maxlength=\"80\"/></td>
							<td>(opcional)</td>
							</tr>
							<tr>
							<td>Email:</td>
							<td><input placeholder=\"Seu email..\" type=\"text\" name=\"email\" size=\"40\" maxlength=\"80\"/></td>
							</tr>
							<tr>
							<td>Mensagem:</td>
				<td><textarea type=\"text\" onkeyup=\"progresso_tecla(this)\" name=\"mensagem\" cols=\"38\" rows=\"7\" maxlength=\"2000\"></textarea></td>
							</tr>
							<tr><td></td><td><div id=\"progresso\">(0 / 300)</div></td><td><input type=\"submit\" value=\"enviar\" class=\"botao\" /></td></tr>
						</table>
						</form>
					</div>				
					";
				}
			
			?> 
        </div> <!-- Fim popup3 -->
        <div id="popUpMsg" onClick="fecharMsg();"> 
    
		</div> <!-- Fim popupMsg -->
        <div id="popUp2Msg">
        
        </div> <!-- Fim popup2Msg -->
        <div id="popUp3Msg">
        	<div id="faixaMsg"> 
        		<div id="fecharMsg"> <a href="javascript: fecharMsg();"> <img src="img/error.png" border="0"><!--fechaMsgr--></a></div>
        	</div> <!-- Fim faixaMsg -->
            <div class="texto">
            	<img src="img/estrela.png" />
                <img src="img/estrela.png" />
                <img src="img/estrela.png" />
                <img src="img/estrela.png" />
                <img src="img/estrela.png" />
                Mensagem enviada ao atendimento com Sucesso!!<br/> Aguarde resposta... Obrigado.
                <img src="img/estrela.png" />
                <img src="img/estrela.png" />
                <img src="img/estrela.png" />
                <img src="img/estrela.png" />
                <img src="img/estrela.png" />
            </div> <!-- fim texto -->
        </div> <!-- popUp3Msg --> 
</body>
</html>