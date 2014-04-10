<? session_start();
	if(isset($_GET['op']) && $_GET['op'] == '2'){
		if(!isset($_GET['cad'])){
			$_SESSION['nome'] = "";
			$_SESSION['descricao'] = "";
			$_SESSION['preco'] = "";
			$_SESSION['precoDe'] = "";
		}
	}
	if(isset($_GET['cad']) && $_GET['cad'] == 'sucess'){
		$_SESSION['validado'] = "sim";
	}
	if(isset($_SESSION['validado']) && $_SESSION['validado'] != 'sim'){
		header('Location: login.php?erro=2');	
	}
	if($_SESSION['validado'] != 'sim'){
		header('Location: login.php?erro=2');	
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Administra&ccedil;&atilde;o</title>
    <link rel="Shortcut Icon" href="img/logo.gif" />
    <link rel="stylesheet" type="text/css" href="css/estilo1.css" />
    <link rel="stylesheet" type="text/css" href="css/estiloADM.css" />
    <link rel="stylesheet" type="text/css" href="css/menuVertical.css" />
    <?php include "php/funcoes.php" ?>
    <!-- CONTADOR -->
    <script type="text/javascript">
		var max=2000;
		var ancho=300;
		function progresso_tecla(obj) {
		  var progresso = document.getElementById("progresso");  
		  if (obj.value.length < max) {
			progresso.style.backgroundColor = "#CFC";    
			progresso.style.backgroundImage = "url(img/textarea.png)";    
			progresso.style.color = "#000000";
			var pos = ancho-parseInt((ancho*parseInt(obj.value.length))/2000);
			progresso.style.backgroundPosition = "-"+pos+"px 0px";
		  } else {
			progresso.style.backgroundColor = "#F30";    
			progresso.style.backgroundImage = "url()";    
			progresso.style.color = "#000000";
		  } 
		  progresso.innerHTML = "("+obj.value.length+" / "+max+")";
		}
		
		function categoria() {
			var str = "";
                $("select option:selected").each(function () {
                    str += $(this).text() + " ";
                });
			location.href="administrador.php?cat="+str;
		}
	</script><!-- CONTADOR -->

    <script>
		function displayResult()
		{
		alert(document.getElementById("myTextarea").value);
		}
	</script>
    <!-- verFotos -->
       <!-- <link rel="stylesheet" href="css/galeria.css" type="text/css" media="screen" />-->
        <link media="screen" rel="stylesheet" href="css/colorbox.css" />
        <script src="js/verFotos/jquery.min.js"></script>
        <script src="js/jquery.colorbox.js"></script>
    <!-- FOTOS UPLOAD -->
		<script src="js/jquery.min.js"></script>
        <script src="js/jquery.colorbox.js"></script>

	  <script type="text/javascript">
        function drop(url){
             if(confirm("Tem certeza que deseja excluir?")){
                udrop(url);
             }
        }
        
        function cancel(){
            document.getElementById("opt").style.display = 'none';
        }
        function udrop(url){
            window.location.href = 'delfile.php?file='+url;
        }
		
        function slidesDrop(url){
             if(confirm("Tem certeza que deseja excluir?")){
                slidesUdrop(url);
             }
        }
        
        function cancel(){
            document.getElementById("opt").style.display = 'none';
        }
        function slidesUdrop(url){
            window.location.href = 'slidesDelfile.php?file='+url;
        }
		function atualizar(){
			window.location.reload();
		}
      </script>
    
    <!-- FOTOS UPLOAD -->
</head>

<body>
	<div id="backgroundLogo1">
    	<div id="backgroundLogo2">
    		<center><a href="home.php"><img src="img/logo.gif" border="0"/></a></center>
    	</div>
    </div>
    <div id="right">
            	<div id="rightCategorias"><hr/> O p &ccedil; &otilde; e s </div> <!-- fim rightCategorias -->
            	<ul class="svertical">
                    <li><a href="administrador.php?op=1&cat=0">Listar Produtos</a></li>                
                    <li><a href="administrador.php?op=2">Novo Produto</a></li>
                    <li><a href="administrador.php?op=10">Listar Slides</a></li>
                    <li><a href="administrador.php?op=20">New's</a></li>
                    <li><a href="administrador.php?op=100">Dúvidas</a></li>
                    <li><a href="administrador.php?op=101">Atendimento</a></li>
                    <li><a href="administrador.php?op=102">Encomendas</a></li>
                </ul>
   </div> <!-- fim right -->
   <div id="estatisticas">
   	<b>Estatísticas</b>
    <? estatisticas(); ?>
    
   </div>
   <?php 
   		if(isset($_GET['op']) && $_GET['op'] == 20){
			echo "<div id=\"lista\">              
				
				<div id=\"nomeCategoria\"><hr/> 
					Produtos New
				</div> <br/><br/><br/><br/>";
				
				newListar();
				
			echo"</div>";
		}
   ?>
   <?php 
   		if(isset($_GET['op']) && $_GET['op'] == 10){
			echo "<div id=\"lista\">              
				
				<div id=\"nomeCategoria\"><hr/> 
					Slide Show
				</div> <br/><br/><br/><br/>";
				
				slidesListar();
				
			echo"</div>";
		}
   ?>
   <?php
   		if((isset($_GET['op']) && $_GET['op'] == 1) || isset($_GET['cat'])){
			echo "<div id=\"lista\">
                <form onsubmit=\"categoria();return true;\"> 
                <select name=\"cat\" size=\"1\">
					<option value=\"0\" selected=\"selected\">Todas</option>	
					<option value=\"1\">Auto Som                                
					<option value=\"2\">Bebidas
					<option value=\"3\">Celulares                   
					<option value=\"4\">Diversos
					<option value=\"5\">Eletrônicos                  
					<option value=\"6\">Informática
					<option value=\"7\">Perfumes
					<option value=\"8\">Camisetas de Time
					<option value=\"9\">Acessório para Moto
					<option value=\"10\">Destaques 
                </select>
                <input type=\"submit\" value=\"Mudar Categoria\" />
                </form>	                
				
				<div id=\"nomeCategoria\"><hr/> ";
					$_SESSION['codCategoria'] = $_GET['cat'];
					categoria(); 
				echo" </div> <br/><br/><br/><br/>";
				
				listar();
				
			echo"</div>";
			
		}
   		if(isset($_GET['op']) && $_GET['op'] == 2){  
   		echo "<div id=\"formulario\">
				<div id=\"mensagem\">";
					if(isset($_GET['cad']) && $_GET['cad'] == 'sucess'){						
						echo "Produto cadastrado com sucesso! <img src=\"img/estrela.png\" height=\"30px\"/>";
					}else
					if(isset($_GET['cad']) && $_GET['cad'] == 'repet'){
						echo "Este nome de produto já esta cadastrado! <img src=\"img/error.png\" height=\"30px\"/>";
					}
        	echo "</div><br/><br/><form action=\"php/cadastrar.php\" method=\"get\">";
		if(isset($_SESSION['nome'])){
			echo "Titulo:  <input type=\"text\" name=\"nome\" size=\"40\" maxlength=\"80\" required value=\"".$_SESSION['nome']."\"/><br/><br/>";}else{
            echo "Titulo: <input placeholder=\"Titulo do produto ...\" type=\"text\" name=\"nome\" size=\"40\" maxlength=\"80\" required /><br/><br/>";}
		
		if(isset($_SESSION['descricao'])){
			echo "Descrição:<br/><textarea type=\"text\" onkeyup=\"progresso_tecla(this)\" name=\"descricao\" cols=\"50\" rows=\"20\" maxlength=\"2000\">".$_SESSION['descricao']."</textarea><br/><br/>";}else{
            echo "Descrição:<br/><textarea type=\"text\" onkeyup=\"progresso_tecla(this)\" name=\"descricao\" cols=\"50\" rows=\"20\" maxlength=\"2000\"></textarea><br/><br/>";}		
       
                echo "<div id=\"progresso\">(0 / 2000)</div><br/>";
				
		if(isset($_SESSION['preco'])){
			echo "Preço:  <input type=\"text\" name=\"preco\" size=\"20\" required value=\"".$_SESSION['preco']."\"/><br/><br/>";}else{
            echo "Preço: <input placeholder=\"Preço: 599.99\" type=\"text\" name=\"preco\" size=\"20\" required /><br/><br/>";}
				
		if(isset($_SESSION['precoDe'])){
			echo "Preço Antigo*  <input type=\"text\" name=\"precoDe\" size=\"20\" value=\"".$_SESSION['precoDe']."\"/><br/><br/>";}else{
            echo "Preço Antigo* <input placeholder=\"Preço Antigo: 199.99\" type=\"text\" name=\"precoDe\" size=\"20\" /><br/><br/>";}
				
				echo "<table>
				<tr><td></td> <td><b>Categorias</b></td></tr>
				<tr>
					<td> Todos <input type=\"checkbox\" name=\"categorias[]\" value=\"0\" checked/> </td>
					<td> Auto Som <input type=\"checkbox\" name=\"categorias[]\" value=\"1\"/> </td>
					<td> Bebidas <input type=\"checkbox\" name=\"categorias[]\" value=\"2\"/> </td>
				</tr>
				<tr>
					<td> Celulares <input type=\"checkbox\" name=\"categorias[]\" value=\"3\"/> </td>
					<td> Diversos <input type=\"checkbox\" name=\"categorias[]\" value=\"4\"/> </td>
					<td> Eletrônicos <input type=\"checkbox\" name=\"categorias[]\" value=\"5\"/> </td>
				</tr>
				<tr>
					<td> Informática <input type=\"checkbox\" name=\"categorias[]\" value=\"6\"/> </td>
					<td> Perfumes <input type=\"checkbox\" name=\"categorias[]\" value=\"7\"/> </td>
					<td> Cam. de Time <input type=\"checkbox\" name=\"categorias[]\" value=\"8\"/> </td>
				</tr>
				<tr>
					<td> Acess. Moto <input type=\"checkbox\" name=\"categorias[]\" value=\"9\"/> </td>
					<td> Destaques: <input type=\"checkbox\" name=\"categorias[]\" value=\"10\"/> </td>
					<!--<td> Promoções: <input type=\"checkbox\" name=\"categorias[]\" value=\"11\"/> </td> -->
				</tr>
				</table>";
				
				echo "<input type=\"reset\"  value=\"Limpar\" class=\"botao\" />";
				echo "<input type=\"submit\" value=\"salvar\" class=\"botao\" />   ";    
            	echo "  </form>";
							
        echo "</div>";
		}
		?> <!-- Fim formulario1  NOVO PRODUTO-->
        <!-- inicio formulario1  EDITAR PRODUTO-->
		<?php 
        if(isset($_GET['op']) && $_GET['op'] == 4){  recuperarTudo();
   		echo "<div id=\"formulario\">
				<div id=\"mensagem\">";
					if(isset($_GET['cad']) && $_GET['cad'] == 'sucess'){
						echo "Produto editado com sucesso! <img src=\"img/estrela.png\" height=\"30px\"/>";
					}else
					if(isset($_GET['cad']) && $_GET['cad'] == 'repet'){
						echo "Este nome já existe em outro Produto! <img src=\"img/error.png\" height=\"30px\"/>";
					}$prod = $_GET['codigoProduto'];
        	echo "</div><br/><br/><form action=\"php/atualizar.php?codigoProduto=".$prod."\" method=\"post\">";
			
			echo "Titulo:  <input type=\"text\" name=\"nome\" size=\"40\" maxlength=\"80\" required value=\"".$_SESSION['nome']."\"/><br/><br/>";
		
			echo "Descrição:<br/><textarea type=\"text\" onkeyup=\"progresso_tecla(this)\" name=\"descricao\" cols=\"50\" rows=\"20\" maxlength=\"2000\">".$_SESSION['descricao']."</textarea><br/><br/>";       
            echo "<div id=\"progresso\">(0 / 2000)</div><br/>";
				
			echo "Preço:  <input type=\"text\" name=\"preco\" size=\"20\" required value=\"".$_SESSION['preco']."\"/><br/><br/>";	
			echo "Preço Antigo*  <input type=\"text\" name=\"precoDe\" size=\"20\" value=\"".$_SESSION['precoDe']."\"/><br/><br/>";
				
			echo "<table>
				<tr><td></td> <td><b>Categorias</b></td></tr>
				<tr>
					<td> Todos <input type=\"checkbox\" name=\"categorias[]\" value=\"0\" ". checked(0)."/> </td>
					<td> Auto Som <input type=\"checkbox\" name=\"categorias[]\" value=\"1\" ".checked(1)."/>  </td>
					<td> Bebidas <input type=\"checkbox\" name=\"categorias[]\" value=\"2\" ".checked(2)."/> </td>
				</tr>
				<tr>
					<td> Celulares <input type=\"checkbox\" name=\"categorias[]\" value=\"3\" ".checked(3)." /></td>
					<td> Diversos <input type=\"checkbox\" name=\"categorias[]\" value=\"4\" ".checked(4)." /></td>
					<td> Eletrônicos <input type=\"checkbox\" name=\"categorias[]\" value=\"5\" ".checked(5)." /></td>
				</tr>
				<tr>
					<td> Informática <input type=\"checkbox\" name=\"categorias[]\" value=\"6\" ".checked(6)." /></td>
					<td> Perfumes <input type=\"checkbox\" name=\"categorias[]\" value=\"7\" ".checked(7)." /></td>
					<td> Cam. Time <input type=\"checkbox\" name=\"categorias[]\" value=\"8\" ".checked(8)." /></td>
				</tr>
				<tr>
					<td> Acess. Moto <input type=\"checkbox\" name=\"categorias[]\" value=\"9\" ".checked(9)." /></td>
					<td> Destaques: <input type=\"checkbox\" name=\"categorias[]\" value=\"10\" ".checked(10)." /></td>
				<!--	<td> Promoções: <input type=\"checkbox\" name=\"categorias[]\" value=\"11\" ".checked(11)." /></td>-->
				</tr>
				</table>";
				
				echo "<input type=\"reset\"  value=\"Limpar\" class=\"botao\" />";
				echo "<input type=\"submit\" value=\"salvar\" class=\"botao\" />";    
            	echo "  </form>";
							
        echo "</div>";
		}
		//session_destroy();
		?> <!-- Fim formulario1  EDITAR PRODUTO-->
        <!-- Fim formulario1  EDITAR SLIDES-->
        <?php 
        if(isset($_GET['op']) && $_GET['op'] == 11){  slidesRecuperarTudo();
   		echo "<div id=\"formulario\">
				<div id=\"mensagem\">";
					if(isset($_GET['cad']) && $_GET['cad'] == 'sucess'){
						echo "Produto editado com sucesso! <img src=\"img/estrela.png\" height=\"30px\"/>";
					}else
					if(isset($_GET['cad']) && $_GET['cad'] == 'repet'){
						echo "Este nome já existe em outro Produto! <img src=\"img/error.png\" height=\"30px\"/>";
					}$prod = $_GET['codigo'];
        	
			echo "</div><br/><br/><form action=\"php/atualizarSlide.php?codigo=".$prod."\" method=\"post\">";
			
			echo "Titulo:<br/>  <input type=\"text\" name=\"titulo\" size=\"40\" maxlength=\"45\" required value=\"".$_SESSION['titulo']."\"/><br/><br/>";
			echo "Descrição:<br/>  <input type=\"text\" name=\"descricao\" size=\"50\" maxlength=\"110\" required value=\"".$_SESSION['descricao']."\"/><br/><br/>";				
			echo "Codigo Produto:<br/>  <input type=\"text\" name=\"codigoProduto\" size=\"20\" required value=\"".$_SESSION['codigoProduto']."\"/><br/><br/>";	
				
			echo "<input type=\"reset\"  value=\"Limpar\" class=\"botao\" />";
			echo "<input type=\"submit\" value=\"salvar\" class=\"botao\" />";    
            echo "  </form>";
			
			echo "<br/><br/>Dicas:
						<li> Cada um das Áreas são limitadas para não ultrapassar o espaço de texto.
						<li> No final de editar a Descrição, coloque (três pontos no fim) ....
			";			
							
        echo "</div>";
		}
		?> <!-- Fim formulario1  EDITAR SLIDES-->
        <!-- Inicio formulario1  EDITAR NEW-->
        <?php 
        if(isset($_GET['op']) && $_GET['op'] == 21){  newRecuperarTudo();
   		echo "<div id=\"formulario\">
				<div id=\"mensagem\">";
					if(isset($_GET['cad']) && $_GET['cad'] == 'sucess'){
						echo "Produto editado com sucesso! <img src=\"img/estrela.png\" height=\"30px\"/>";
					}else
					if(isset($_GET['cad']) && $_GET['cad'] == 'repet'){
						echo "Este nome já existe em outro Produto! <img src=\"img/error.png\" height=\"30px\"/>";
					}$prod = $_GET['codigo'];
        	
			echo "</div><br/><br/><form action=\"php/atualizarNew.php?codigo=".$prod."\" method=\"post\">";
			
			echo "Titulo:<br/>  <input type=\"text\" name=\"titulo\" size=\"40\" maxlength=\"45\" required value=\"".$_SESSION['titulo']."\"/><br/><br/>";		
			echo "Codigo Produto:<br/>  <input type=\"text\" name=\"codigoProduto\" size=\"20\" required value=\"".$_SESSION['codigoProduto']."\"/><br/><br/>";	
				
			echo "<input type=\"reset\"  value=\"Limpar\" class=\"botao\" />";
			echo "<input type=\"submit\" value=\"salvar\" class=\"botao\" />";    
            echo "  </form>";
							
        echo "</div>";
		}
		?> <!-- Fim formulario1  EDITAR SLIDES-->
        <!-- INSERIR FOTOS PRODUTOS DAS CATEGORIAS -->
        <?php 
			if(isset($_GET['op']) && $_GET['op'] == 5){
				echo" <div id='gallery'>";
				
				include 'php/admLerFotos.php';  
				
				echo "</div>";
				
				echo" <div id='area'>"; 
				nomeCodigoProduto(); 
				echo" <hr>
					
					<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
					<input type=\"file\" name=\"fotos[]\" /><br/>
					<input type=\"file\" name=\"fotos[]\" /><br/>
					<input type=\"file\" name=\"fotos[]\" /><br/>
					<input type=\"file\" name=\"fotos[]\" /><br/>
					<input type=\"file\" name=\"fotos[]\" /><br/><br/>
					<input type=\"submit\" value=\"Enviar fotos\" />
					</form>
					<hr>";?>
					
				
				 <? include "php/upload.php"; 
				 echo" Obs: A foto com nome [principal.jpg] será a foto que irá aparecer como capa dos produtos!! (nome todo em letras minúsculas).<br/><br/><br/>
				 <a href=\"javascript: atualizar();\"> <img src=\"img/atualizar.png\" border=\"0\" height=\"40px\"></a>Atualizar fotos...
				 </div>"; 
			}
		?>
        <!-- FIM INSERIR FOTOS PRODUTOS DAS CATEGORIAS -->
        <!-- INSERIR FOTOS SLIDES-->
        <?php 
			if(isset($_GET['op']) && $_GET['op'] == 12){
				echo" <div id='gallery'>";
				
				include 'php/slidesLerFotos.php';  
				
				echo"
				</div>
				<div id='area'>
					Atualizando foto Slide posição: ".$_GET['codigo']."º
				 <hr>
					
					<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
					<input type=\"file\" name=\"fotos[]\" /><br/><br/>
					<input type=\"submit\" value=\"Enviar fotos\" />
					</form>
					<hr>";?>
					
				
				 <? include "php/slidesUpload.php"; 
				 echo" <br/><br/><br/>
				 <a href=\"javascript: atualizar();\"> <img src=\"img/atualizar.png\" border=\"0\" height=\"40px\"></a>Atualizar fotos...
				 </div>"; 
			}
		?>
        <!-- FIM INSERIR FOTOS SLIDES-->
        <!-- INSERIR FOTOS NEW 1-->
        <?php 
			if(isset($_GET['op']) && ($_GET['op'] == 22 || $_GET['op'] == 23)){
				echo" <div id='gallery'>";
				
				include 'php/newLerFotos.php';  
				
				echo"
				</div>
				<div id='area'> ";
					if($_GET['op'] == 22){
						echo "Atualizando [ Foto1 ] NEW Posição ".$_GET['codigo']."º";  
					}
					if($_GET['op'] == 23){
						echo "Atualizando [ Foto2 ] NEW Posição ".$_GET['codigo']."º";
					}
				 echo"<hr>
					
					<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
					<input type=\"file\" name=\"fotos[]\" /><br/><br/>
					<input type=\"submit\" value=\"Enviar fotos\" />
					</form>
					<hr>
					Obs: Fotos postadas aqui devem ter o Tamanho 277x140";?>
					
				
				 <? 
				 include "php/newUpload.php"; 
				 echo" <br/><br/><br/>
				 <a href=\"javascript: atualizar();\"> <img src=\"img/atualizar.png\" border=\"0\" height=\"40px\"></a>Atualizar fotos...
				 </div>"; 
			}
		?>
        <!-- FIM INSERIR FOTOS NEW 1-->
        <!-- CONTATOS -->
        	<?php 
			if(isset($_GET['op']) && $_GET['op'] == 100){
				echo "
				<div id=\"lista\">              
					<div id=\"nomeCategoria\"><hr/> 
						Duvidas dos Clientes
					</div> <br/><br/><br/><br/>";
					duvidas();
			echo"</div>";	
			}
			if(isset($_GET['op']) && $_GET['op'] == 101){
				echo "
				<div id=\"lista\">              
					<div id=\"nomeCategoria\"><hr/> 
						Atendimento aos Clientes
					</div> <br/><br/><br/><br/>";
					atendimento();
			echo"</div>";	
			}
			if(isset($_GET['op']) && $_GET['op'] == 102){
				echo "
				<div id=\"lista\">              
					<div id=\"nomeCategoria\"><hr/> 
						Encomendas dos Clientes
					</div> <br/><br/><br/><br/>";
					encomendas();
			echo"</div>";	
			}
			?>
        <!-- FIM CONTATOS -->
        
        
	</body>
</html>