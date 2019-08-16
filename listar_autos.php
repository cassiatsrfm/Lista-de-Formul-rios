<!DOCTYPE html
>

<html> <head>
<meta charset="utf

-8" />

<title>Teste de Cadastros</title
>
</head> <body>
<h1> Informações do carro! </h1>

<?php
$host = 'localhost';
$user = 'aluno'; 
$passw = 'aluno'; 
$dbname = 'atv_prt_043_bd';

$fabricante = $_POST['fabricante'];
$ano_fabricacao = $_POST['ano_fabricacao'];
$quilometragem = $_POST['quilometragem'];


$conn = mysqli_connect($host, $user, $passw, $dbname) or die
("Unable to connect!");
$query = "INSERT INTO ('fabricante','ano_fabricacao', 'quilometragem') VALUES ($fabricante,$ano_fabricacao,$quilometragem)";

$result = mysqli_query( $conn, $query ) or die ("Error in query");

while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; 
}
?>
<table>
<tr>
<td><strong></strong></td>
<td width="10">&nbsp;</td>
<td><strong>Fabricante</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Ano de Fabricação</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Quilometragem</strong></td>
<td width="10">&nbsp;</td>

</tr>
<?php
if ($table) { 
foreach($table as $d_row) {

?>

<tr>
<td><?php echo($d_row["auto_id"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["fabricante"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["ano_fabricacao"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["quilometragem"]); ?></td>
<td width="10">&nbsp;</td>
</tr>
<?php
}
}
?>
</table>
<p>Número de Registros : <?php echo(mysqli_num_rows($result)); ?></p>
<?php
mysqli_close($conn);
?>
</body>
</html>