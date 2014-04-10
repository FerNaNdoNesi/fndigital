<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/estiloADM.css" rel="stylesheet" type="text/css">
<title>login page</title>
</head>

<body>
	<div id="login">    
        <div id="logo">
            <a href="index.php"> <img src="img/FNDigital_logo.gif" border="0" height="250px"> </a>				
        </div> <!-- Fim logo -->
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
        
    </div>


</body>
</html>