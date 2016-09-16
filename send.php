<?php 
		//$emails_to ---> all emails to send
		require("class.phpmailer.php");
				$mail = new PHPMailer();
				//This is SMTP settings
				//$mail->IsSMTP();
				//$mail->SMTPAuth = true;
				//$mail->SMTPSecure = "tls";
				//$mail->Host = "smtp.gmail.com";
				//$mail->Port = 587;
				//$mail->Username = "mdb@globalstats.com.ar";
				//$mail->Password = "Mdb*123!";
				//End SMTP settings
				//This is SMTP settings
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "ssl";
				$mail->Host = "smtp.mandrillapp.com";
				$mail->Port = 465;
				$mail->Username = "mdb@globalstats.com.ar";
				$mail->Password = "qNA_FM4_FNZq6WCswprT_Q";
				//End SMTP settings
				$mail->From = "info@globalstats.com.ar";
				//$mail->From = "emkt@globalstas.com.ar";
				$mail->FromName = "Notificacion Pago";
				//$mail->FromName = "Globalstats";
				$mail->AddAddress($email_to);
				$mail->AddBCC('adriang_1174@hotmail.com');
				//$mail->AddAddress('formulario@nuevahost.net');
				$mail->WordWrap = 50; // set word wrap to 50 characters
				$mail->IsHTML(true); // set email format to HTML
				$mail->ContentType = "text/html";
				$mail->CharSet = "UTF-8";
				$mail->Subject = "Notificacion de pago de Mercado Pago";
				// Retrieve the email template required 
				//$message = file_get_contents('http://globalstats.com.ar/mailing/holatel/v1/index.html'); 
				//$message = file_get_contents('http://www.g2desarrollo.com.ar/Holatel/mailingPromo/index.html');
				//$message = file_get_contents('http://globalstats.com.ar/mailing/holatel/v1/index.html');
// Replace the % with the actual information 
				//$message = str_replace('%nombre%', $nombre_cliente, $message); 
				//Set the message 
				$mail->Body = $message; 
				//$mail->AltBody(strip_tags($message)); 
				$mail->Send();		
?>
