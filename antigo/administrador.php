<?php
	session_start(); 
	if( isset($_SESSION['validado']) && $_SESSION['validado'] != 'sim'){
		header('Location: login.php?erro=2');	
	}
	if($_SESSION['validado'] != 'sim'){
		header('Location: login.php?erro=2');	
	}
	?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/estiloADM.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
var max=90;
var ancho=300;
function progresso_tecla(obj) {
  var progresso = document.getElementById("progresso");  
  if (obj.value.length < max) {
    progresso.style.backgroundColor = "#CFC";    
    progresso.style.backgroundImage = "url(img/textarea.png)";    
    progresso.style.color = "#000000";
    var pos = ancho-parseInt((ancho*parseInt(obj.value.length))/90);
    progresso.style.backgroundPosition = "-"+pos+"px 0px";
  } else {
    progresso.style.backgroundColor = "#F30";    
    progresso.style.backgroundImage = "url()";    
    progresso.style.color = "#000000";
  } 
  progresso.innerHTML = "("+obj.value.length+" / "+max+")";
}
</script>
<title>Administrador</title>
</head>

<body>
	<div id="logo2">
            <a href="index.php"> <img src="img/FNDigital_logo.gif" border="0" height="250px"> </a>
    </div> <!-- Fim logo2 -->
	<div id="topo">
    	<?php echo "Bem - Vindo   ",$_SESSION['usuario']; ?>
    </div>
	<div id="principal">
    	<div id="passos">
        	<h3><center>Passos a serem seguidos</center></h3><br/>
        	<titulo>1 - Escolher a categoria do produto</titulo><br/>
        	<descricao><li>Categoria disponiveis:<br/><br/>
                        <li> Bebidas
                        <li> Celulares                        
                        <li> Diversos                         
            			<li> InformÃ¡tica
                        <li> Roupas
                        <li> Veiculos </descricao>
                        <br/><br/>
            <titulo>2 - Escolher o produto</titulo><br/>
        	<descricao><li>Produtos disponiveis:<br/><br/>
            			<li> produto1
                        <li> .  .  .
                        <li> produto50</descricao>
                        <br/><br/>
            <titulo>3 - Clique em buscar . . .</titulo><br/>
            <descricao><li> ApÃ³s o click os campos Titulo, DescriÃ§Ã£o e PreÃ§o serÃ£o carregados.</descricao><br/><br/>
            <titulo>4 - Inserir dados do produto . . .</titulo><br/>
            <descricao><li> Preencher e conferir Ã¡reas de texto:<br/><br/>
            		   <li> Titulo
                       <li> DescriÃ§Ã£o maximo com 90 caracteres
                       <li> PreÃ§o sugestÃ£o: R$ 00,00 </descricao><br/><br/>
            <titulo>5 - Clique em salvar . . .</titulo><br/>
            <descricao><li> Boas vendas ...</descricao>
        
        </div>
        <div id="formulario1">
        	<form action="php/busca.php" method="get">
               Categoria:
                <select name="categoria">
					<option value="veiculos">Auto Som                                
                    <option value="bebidas">Bebidas
                    <option value="celulares">Celulares
                    <option value="destaque">Destaque                    
                    <option value="diversos">Diversos
                    <option value="eletronicos">Eletrônicos                  
                    <option value="informatica">Informática
                    <option value="roupas">Roupas
                    <option value="roupas_femininas">Roupas Femininas
                    <option value="roupas_masculinas">Roupas Masculinas
                    <option value="promocoes">Promoções                                                           
                </select>
                Produtos:
                <select name="produto">
                    <option value="produto1">Produto 1
                    <option value="produto2">Produto 2
                    <option value="produto3">Produto 3
                    <option value="produto4">Produto 4
                    <option value="produto5">Produto 5
                    <option value="produto6">Produto 6
                    <option value="produto7">Produto 7
                    <option value="produto8">Produto 8
                    <option value="produto9">Produto 9
                    <option value="produto10">Produto 10
                    <option value="produto11">Produto 11
                    <option value="produto12">Produto 12
                    <option value="produto13">Produto 13
                    <option value="produto14">Produto 14
                    <option value="produto15">Produto 15
                </select>
                <br/><br/>
                <input type="submit" value="buscar">
            </form>
        </div> <!-- Fim formulario1 -->
        <div id="formulario2">
                <?php
				echo "<img src=\"img/comercio.png\" height=\"60px\"/>";
				if(isset($_GET['cad']) && $_GET['cad'] == 'sucess'){
					echo "Produto cadastrado com sucesso! <img src=\"img/estrela.png\" height=\"30px\"/>";
				}else
				if(isset($_SESSION['categoria']) && isset($_SESSION['produto'])){
					echo "Produto sendo atualizado: [ ",$_SESSION['categoria']," ] - [ ",$_SESSION['produto']," ]";
				}
        	echo "<br/><br/><form action=\"php/cadastra.php\" method=\"get\">";
		if(isset($_SESSION['titulo'])){echo " Titulo:  <input placeholder=\"Digite titulo do anuncio ...\"  type=\"text\" name=\"titulo\" size=\"40\" maxlength=\"40\" required value=\"".$_SESSION['titulo']."\"/><br/><br/>";}else{
                echo "Titulo: <input placeholder=\"Digite titulo do anuncio ...\" type=\"text\" name=\"titulo\" size=\"40\" maxlength=\"40\" required /><br/><br/>";}
		
		if(isset($_SESSION['descricao'])){echo " Descrição:  <input placeholder=\"Digite descrição do produto ...\"  type=\"text\" onkeyup=\"progresso_tecla(this)\" name=\"descricao\" size=\"50\" maxlength=\"90\" required value=\"".$_SESSION['descricao']."\"/><br/><br/>";}else{
                echo "Descrição: <input placeholder=\"Digite descrição do produto ...\" onkeyup=\"progresso_tecla(this)\" type=\"text\" name=\"descricao\" size=\"50\" maxlength=\"90\" required /><br/><br/>";}		
       
                echo "<div id=\"progresso\">(0 / 90)</div><br/>";
				if(isset($_SESSION['preco'])){echo " Valor:  <input placeholder=\"Digite valor: R$ 50,00\"  type=\"text\" name=\"preco\" size=\"20\" maxlength=\"40\" required value=\"".$_SESSION['preco']."\"/><br/><br/>";}else{
                echo "Valor: <input placeholder=\"Digite valor: R$ 50,00\" type=\"text\" name=\"preco\" size=\"20\" maxlength=\"40\" required /><br/><br/>";}
				echo "<input type=\"reset\"  value=\"Limpar\" class=\"botao\" />";
				echo "<input type=\"submit\" value=\"salvar\" class=\"botao\" />   ";    
            	echo "  </form>";
			?>				
        </div> <!-- Fim formulario1 -->
        <div id="pedidos"> 
        <?php 
		$Arq = fopen("contadores/cont_portalcco.txt", 'rb');
		while (!feof($Arq)) {$cco = fgets($Arq);}
		
		$Arq = fopen("contadores/cont_portalpto.txt", 'rb+');
		while (!feof($Arq)) {$pto = fgets($Arq);}
		
		echo "<h5>Visitas através do portal Chapecó: ".$cco."</br>";
		echo "Visitas através do portal Pato Br: ".$pto."</br></h5>";
		?>
        </br></br>Acompanhar Pedidos: <a href="clientes.php"> <img src="img/cliente.png" border="0" height="50px"> </a></div>
    </div>
</body>
</html>