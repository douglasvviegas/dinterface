<?php
include "consulta.php";
?>
<html>
	<head>
		<title>LISTA</title>
	</head>
	<body style="background-color:#3B0B0B">
		<fieldset>
		<legend style="color:#E0E6F8"><font size="6">Lista de Convidados</font></legend>
		<form method="post" action="http://localhost:9000/insert.php">
		<p><font style="color:#E0E6F8" size="5" face="Times">Para confirmar seu nome na lista do evento preencha os seguintes dados abaixo:</font></p>
		<table style="background-color:#2A0A0A">
			<tr style="color:#E0E6F8">
				<td>Nome:</td>
				<td><input name="nome" /></td>
			</tr>
			<tr style="color:#E0E6F8">
				<td>Email:</td>
				<td><input name="email" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Enviar" /></td>
			</tr>
		</table>
		</form>
		</fieldset>
		<?php
		echo $resultado;
		?>
	</body>
</html>