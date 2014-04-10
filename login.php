<? session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Login</title>
    <link rel="Shortcut Icon" href="img/logo.gif" />
    <link rel="stylesheet" type="text/css" href="css/estilo1.css" />
    <link rel="stylesheet" type="text/css" href="css/estiloADM.css" />
</head>

<body>
	<div id="backgroundLogo1">
    	<div id="backgroundLogo2">
    		<center><a href="home.php"><img src="img/logo.gif" border="0"/></a></center>
    	</div>
    </div>
    <div id="login"> 
        <div id="error">
            <?php 
                if(isset($_GET['erro']) && $_GET['erro'] == 1){
                    echo "<img src=\"img/error.png\" height=\"20px\"/>";
                    echo "  Senha ou usuario invalido!!<br/><br/>";
                }else
                if(isset($_GET['erro']) && $_GET['erro'] == 2){
                    echo "<img src=\"img/error.png\" height=\"20px\"/>";
                    echo "  Usuario sem autorização de acesso!!<br/><br/>";
                }
            ?>
        </div> <!-- Fim error --> 
        <div id="escrita">
                USUARIO:<br/><br/><br/>
                    SENHA:
        </div> <!-- Fim escrita -->
        <div id="form">
                <form action="php/valida.php" method="post">
            <input type="text" size="30" name="usuario"> <br/><br/>
                    <input type="password" size="30" name="senha"><br/><br/>
                    <input type="submit" value="entrar">
                    </form>
        </div> <!-- Fim form -->
	</div><!-- Fim login -->

</body>
</html>