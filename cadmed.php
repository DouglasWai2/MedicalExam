<?php
$crm=$_GET['crm'];
$nome = $_GET['nomemed'];
$senhaM = $_GET['senhamed'];


include_once("conexao.php");

$sqlinserir = "insert into tbmedicos values('$crm','$nome','$senhaM');";

if(mysqli_query($conexao,$sqlinserir)){
	header("Location: lmedico.php");
} else {
	echo "Erro ao cadastrar.<br>".mysqli_error($conexao); 
	echo "<br><a href='lmedico.php'>Voltar</a>";
}

mysqli_close($conexao);

?>