<!DOCTYPE html>
<html>
<head>
<title>Formulário de Feedback</title>
</head>
<body>
<form action="listar_autos.php" method="post">
<table>
<tr>
<td colspan="2"><h2>Por favor, coloque as informações do seu carro</h2></td>
</tr>
<tr>
<td><p><strong> Fabricante: </strong></p></td>
<td><input type="text" name="fabricante" size="30" maxlength="30" /></td>
</tr>
<tr>
<td><p><strong>Ano de Fabricação: </strong></p></td>
<td><input type="text" name="ano_fabricacao" size="40"/></td>
</tr>
<tr>
<td><p><strong>Quilometragem: </strong></p></td>
<td><textarea name="quilometragem" rows="7" cols="48"/></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Enviar" /></td>
</tr>
</table>
</form>
</body>
</html>