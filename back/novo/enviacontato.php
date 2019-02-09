<!DOCTYPE html>
<html>
<head>
	<title>Enviar cadastro</title>
</head>
<body>

<?php 
	/* Pegar dados do formulário via método post */
	$mail = "monica@lumenagencia.com.br";

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$tel = $_POST['phone'];
	$varMensagem = $_POST['mensagem'];

	$assunto .= " (Fale Conosco - Nordeste Food)";

	// Ã necessÃ¡rio indicar que o formato do e-mail Ã© html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= "From: $email";
    //$headers .= "Bcc: $EmailPadrao\r\n";
	

	/* Conteudo do email */
	$conteudo = (
		"Fale Conosco - Nordeste Food\n".
		"\n------------------------------\n".
		"\nNome: ".$nome.
		"\nE-mail: ".$email.
		"\nTelefone: ".$tel.
		"\nMensagem: ".$varMensagem
	);

	/* Conteudo do email */
	$conteudo = ("

			<h2>DADOS DA MENSAGEM:</h2> 
			<table style='width: 100%; border: 1px solid #E4E2E2;'>
				<tr> 
					<td style='width: 30%; padding: 5px;'><b>Nome:</b></td> 
					<td style='width: 69%; padding: 5px;'>$nome </td>
				</tr>
				<tr style='background: #E4E2E2'> 
					<td style='padding: 5px;'><b>E-mail:</b></td> 
					<td style='padding: 5px;'>$email</td> 
				</tr>
				<tr> 
					<td style='padding: 5px;'><b>Telefone:</b></td> 
					<td style='padding: 5px;'>$tel</td> 
				</tr>
				<tr style='background: #E4E2E2'> 
					<td style='padding: 5px;'><b>Mensagem:</b></td> 
					<td style='padding: 5px;'>$varMensagem</td> 
				</tr>
			</table>
		");
	
	@mail($mail, $assunto, $conteudo,  $headers);	

	// echo $conteudo;

?>

<script type="text/javascript">
	//Página de retorno após envio
	alert('Mensagem enviada com sucesso.');

	window.location="index.html";
</script>

</body>
</html>

