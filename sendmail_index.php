<?php
include("class.phpmailer.php");
include("class.smtp.php");

	if (count($_POST) > 0){
		$email = $_POST['email'];
		$header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom:";
		
		$body = @"Correo enviado desde: ".$_SERVER['REMOTE_ADDR']." el d&iacutea ".date("d/m/Y M:i", time())."<br />
			<hr />
			Hola me interesa Klinco, mi correo es: $email 
			<br>
			¡Saludos!
			<hr />
			Fin del correo";
			
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