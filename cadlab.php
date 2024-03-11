<?php
$cnpj = $_GET['cnpj'];
$nome = $_GET['nomelab'];
$senhaL = $_GET['senhalab'];


include_once("conexao.php");

$sqlinserir = "insert into tblaboratorio values('$cnpj', '$nome','$senhaL');";

if(mysqli_query($conexao,$sqlinserir)){
	header("Location: llaboratorio.php");
} else {
	echo "Erro ao cadastrar paciente.<br>".mysqli_error($conexao); 
	echo "<br><a href='llaboratorio.php'>Voltar</a>";
}

mysqli_close($conexao);

?>