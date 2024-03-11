<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpfpaciente'];
$endereco=$_GET['endereco'];
$email=$_GET['email'];
$telefone=$_GET['telefone'];
$datanasc=$_GET['datanasc'];

include_once("conexao.php");

$sqlinserir = "insert into cadpaciente values('$nome','$cpf','$endereco','$email','$telefone','$datanasc');";

if(mysqli_query($conexao,$sqlinserir)){
	header("Location: acessolab.php");
} else {
	echo "Erro ao cadastrar paciente.<br>".mysqli_error($conexao); 
	echo "<br><a href='cadastrarpaciente.php'>Voltar</a>";
}

mysqli_close($conexao);

?>

