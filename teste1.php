<!DOCTYPE html
>

<html> <head>
<meta charset="utf

-8" />

<title>Teste de Cadastros</title
>
</head> <body>
<h1> TESTE DE CADASTROS </h1>

<?php
$host = 'localhost';
$user = 'aluno'; 
$passw = 'aluno'; 
$dbname = 'atv_prt_042_bd';

$testID = $_POST['testID'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
 

$conn = mysqli_connect($host, $user, $passw, $dbname) or die
("Unable to connect!");
$query = "INSERT INTO (nome, idade) VALUES ($nome,$idade)";
$result = mysqli_query( $conn, $query ) or die ("Error in query");

?>

</body>
</html>