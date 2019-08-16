<!DOCTYPE html
>

<html> <head>
<meta charset="utf

-8" />

<title>Exibe os feedbacks</title
>
</head> <body>
<h1>Informações do Membro</h1>

<?php
$host = 'localhost'; $user = 'aluno'; $passw = 'aluno'; $dbname = 'atv_prt_041_bd';

$conn = mysqli_connect($host, $user, $passw, $dbname) or die
("Unable to connect!");
$query = "SELECT membros.nome, membros.escola, membros.funcao, membros.numero_da_equipe, membros.email, escolas.nome_da_escola, escolas.cidade, escolas.estado,
equipes.nome_da_equipe, equipes.numero_da_equipe from membros, equipes, escolas where membros.numero_da_equipe = equipes.numero_da_equipe and membros.escola = escolas.nome_da_escola";

$result = mysqli_query( $conn, $query ) or die ("Error in query");

while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; 
}
?>
<table>
<tr>
<td><strong>Membro</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Email</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Escola</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Estado</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Função</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Nome da Equipe</strong></td>
<td width="10">&nbsp;</td>

<td><strong>Numero da equipe</strong></td>
</tr>
<?php
if ($table) { 
foreach($table as $d_row) {

?>

<tr>
<td><?php echo($d_row["nome"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["email"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["escola"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["estado"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["funcao"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nome_da_equipe"]); ?></td>
<td width="10">&nbsp;</td>

<td><?php echo($d_row["numero_da_equipe"]); ?></td>
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