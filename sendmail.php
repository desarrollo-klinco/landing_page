<?php
include("class.phpmailer.php");
include("class.smtp.php");

	if (count($_POST) > 0){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];
		$header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: $name <$email>";
		
		$body = @"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y M:i", time())."<br />
			<hr />
			$comments
			<hr />
			Email end";
			
		$mail = new PHPMailer();

		$mail->IsSMTP();                                      // configura SMTP
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";  // especifica server
		$mail->Port = 465;
		$mail->SMTPAuth = true;     // cambia autenticacion
		$mail->Username = "pretxel100@gmail.com";  // SMTP nombre usuario
		$mail->Password = "ESCOM2010%"; // SMTP contraseña
			
		$mail->AddAddress("pretxel100@hotmail.com", "Klinco");
		$mail->WordWrap = 50;
		$mail->From = $email;
		$mail->IsHTML(true);	
		$mail->Subject = "Klincofriend!";
		$mail->Body    = $body;
		$mail->AltBody = $body;	
			
		
			if (!$mail->Send()){
				die("No se pudo enviar correo");
			}else{
				die("true");
			}


	}



?>