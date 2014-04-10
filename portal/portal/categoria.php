<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/PixelGreen.css" type="text/css" />
<link rel="stylesheet" href="css/estilo2.css" type="text/css" />
<?php include "php/funcoes.php" ?>
<title><?php echo "Categoria: ".$_GET['cat'].""; ?></title>
</head>

<body>
    <div id="wrap">
        <div id="header">
            <div id="header-content">
                <h1 id="logo"><a href="classificados.php" title="Portal Laranjeiras">Portal<span class="orange">Laranjeiras</span></a></h1>
                <h2 id="slogan">Seja Bem - Vindo ao nosso portal...</h2>
                <ul>
                    <li><a href="classificados.php" id="current" title="Classificados">Classificados</a></li>
                    <li><a href="#" title="Crie novos anúncios">An&uacute;ncie j&aacute;</a></li>
                    <li><a href="#" title="Gerêncie seus anúncios">Central do Usu&aacute;rio</a></li>
                    <li><a href="#" title="Fale conosco">Quem Somos</a></li>
                </ul>
            </div> <!-- fim header-content -->
        </div> <!-- fim header -->
    </div> <!-- fim wrap -->
	<div class="topCategoria">
    	<?php topCategoria(); ?>
    </div> <!-- fim banner -->
    <div id="anuncios">
    <?php 			
		anuncios();
	?>
    </div> <!-- fim anuncios -->
    <div id="empresas_1">
    	<div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa">
        	<a href="www.fndigital.comyr.com" ><img src="img/empresas/fndigital.jpg" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
    </div> <!-- fim empresas_1 -->
    
    <div id="empresas_2">
    	<div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
        <div id="empresa_Not_User">
        	<a href="#" ><img src="img/empresas/anuncie_3.gif" width="180px"/></a>
        </div>
    </div> <!-- fim empresas_2 -->
    <div id="rodape">
    
    </div> <!-- fim rodape -->

</body>
</html>