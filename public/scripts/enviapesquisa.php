<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>$assunto</title>
	<meta charset="utf-8">
</head>
<body>

<?php
	/* Pegar dados do formulário via método post */
	$mail = "contato@nordestefoodservice.com.br";

	$amb = $_POST['amb'];
	$atend = $_POST['atend'];
	$alimentos = $_POST['alimentos'];
	$bebidas = $_POST['bebidas'];
	$delivery = $_POST['delivery'];
	$varMensagem = $_POST['mensagem'];

	$email = "'Pesquisa' <contato@lumenagencia.com.br>";
	$empresa = "Nordeste Food";
	$assunto .= " (Pesquisa)";

	// Ã‰Â‰ necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= "From: $email";
    //$headers .= "Bcc: $EmailPadrao\r\n";


	/* Conteudo do email */
	$conteudo = ("
			<h2>DADOS DA PESQUISA:</h2>
			<table style='width: 100%; border: 1px solid #E4E2E2;'>
				<tr>
					<td style='width: 30%; padding: 5px;'><b>Ambiente:</b></td>
					<td style='width: 69%; padding: 5px;'>$amb </td>
				</tr>
				<tr style='background: #E4E2E2'>
					<td style='padding: 5px;'><b>Atendimento:</b></td>
					<td style='padding: 5px;'>$atend</td>
				</tr>
				<tr>
					<td style='padding: 5px;'><b>Alimentos:</b></td>
					<td style='padding: 5px;'>$alimentos</td>
				</tr>
				<tr style='background: #E4E2E2'>
					<td style='padding: 5px;'><b>Bebidas:</b></td>
					<td style='padding: 5px;'>$bebidas</td>
				</tr>
				<tr>
					<td style='padding: 5px;'><b>Delivery:</b></td>
					<td style='padding: 5px;'>$delivery</td>
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
	//Página de retorno apÃ³s envio
	alert('Opinião enviada com sucesso. Muito obrigado!');

	window.location="http://nordestefoodservice.com.br/";
</script>

</body>
</html>

