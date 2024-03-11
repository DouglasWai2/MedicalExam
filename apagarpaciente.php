<?php
$cpf=$_GET['cpf'];

include_once("conexao.php");

$sql="delete from cadpaciente where cpf=".$cpf.";";

if(mysqli_query($conexao, $sql)){
    header("Location:acessolab.php");
    echo "success";
}
else{
    echo "Erro ao apagar paciente.<br>".mysqli_error($conexao);
    echo " <a href='acessolab.php'>Voltar</a>";
}

mysqli_close($conexao);
?>