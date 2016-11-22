
<?php
if($_POST){
	$email = $_POST["email"];
	$nome = $_POST["name"];

	$mensagem = $_POST["message"];

	// Aqui vamos configurar o cabeçalho (header) do e-mail, formatos, remetentes, destinatários de cópias
	$headers = "MIME-Version: 1.0\r\n";
	
	// Aqui definirmos o formato padrão HTML e a codificação do Texto
	$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
	
	// Abaixo estabelecemos o Remetente do E-mail com o From:
	$headers .= "From: $nome <$email>\r\n";
	$headers .= "Cc: $nome <$email>\r\n";

	$destinatario = 'Eric Frata <er.frata@gmail.com>' . "\r\n";
	// Definimos o assuntos do nosso e-mail
	$assunto = "Contato - Site - Eric Frata";

	mail($destinatario, $assunto, $mensagem, $headers);
}
?>