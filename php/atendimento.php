<?php 
	session_start();
	
	$Arq = fopen("../block/sn.txt", 'rb');
		while (!feof($Arq)) {$sn = fgets($Arq);}
		
		$Arq = fopen("../block/user.txt", 'rb');
		while (!feof($Arq)) {$user = fgets($Arq);}
		
		$Arq = fopen("../block/local.txt", 'rb');
		while (!feof($Arq)) {$local = fgets($Arq);}
		
		$Arq = fopen("../block/db.txt", 'rb');
		while (!feof($Arq)) {$db = fgets($Arq);}

		if(!($conexao = mysql_connect($local,$user,$sn))) {
		   //echo "--> 1 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit;
		} 
		if(!($conect = mysql_select_db($db,$conexao))) { 
		   //echo "--> 2 - Nao foi possivel estabelecer uma conexao com o gerenciador MySQL. Favor Contactar o Administrador.";
		   exit; 
		}
			// Passando data do banco "AAAA-MM-DD" para "DD/MM/AAAA"
			//$_POST['time'] = date("d/m/Y H:i:s");
			//$_POST['time'] = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
			
			$sql =  "INSERT INTO atendimento (codigo, nome, telefone, email, mensagem, data) 
			VALUES (NULL, '".htmlspecialchars($_POST['nome'])."', '".htmlspecialchars($_POST['telefone'])."', '".htmlspecialchars($_POST['email'])."', '".htmlspecialchars($_POST['mensagem'])."', NULL);";
			$res = mysql_query($sql);
			
			/*include ('../phpmailer/class.phpmailer.php');
			$mail = new PHPMailer();
		
			//$mail->IsSMTP();
			$mail->IsHTML(true);
			$mail->Host = "server24.000webhost.com";//"ultimate.inf.br";
			$mail->SMTPAuth = false; // Usa autenticação SMTP? (opcional)
			$mail->Username = "vendas.fndigital@gmail.com";//'contatos@ultimate.inf.br'; // Usuário do servidor SMTP
			$mail->Password = "t3051696";//'chapeco159753'; // Senha do servidor SMTP
			$mail->From = $_POST['mail'];//$_POST['Email']; // Seu e-mail
			$mail->Sender = $_POST['mail'];//'$_POST['Email']; // Seu e-mail
			$mail->FromName = $_POST['mail']; //$_POST['Nome']; // Seu nome
			
			
			
			//$mail->AddAddress('mattejacson@yahoo.com.br', 'Futuri Moveis');
			$mail->AddAddress('fernandonesi@gmail.com', 'FNDigital |A T E N D I M E N T O|');
			
			$mail->Subject = "Indicacao de ".$_POST['nome']."";
		
			$body ='Nome: ' . $_POST['nome'] . "<br/><br/>";
			$body.='Telefone: ' . $_POST['telefone'] . "<br/><br/>";
			$body.='Email: ' . $_POST['mail'] . "<br/><br/>";
			$body.='Mensagem: ' . $_POST['mensagem'] . "<br/><br/>";
			$mail->Body = utf8_decode($body);
		
			$enviado = $mail->Send();
		
			$mail->ClearAllRecipients();
			$mail->ClearAttachments();*/
			 
			 
			header("Location: ../".$_GET['link']."?popUpMsg=atendimento");				
?>
