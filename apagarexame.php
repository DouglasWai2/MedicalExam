<?php
$idexame=$_GET['idexame'];

include_once("conexao.php");

$sql="delete from tbexames where idexame='$idexame';";

if(mysqli_query($conexao, $sql)){
    header("Location:acessolab.php");
}
else{
    echo "Erro ao apagar exame.<br>".mysqli_error($conexao);
    echo " <a href='acessolab.php'>Voltar</a>";
}

mysqli_close($conexao);
?>
<!-- <td><img height="50" src=" <?php echo $arquivo['path']; ?>" alt=""></td> -->