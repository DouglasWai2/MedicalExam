<?php
// parametro da conexão
$servidor="localhost";
$usuario="root";
$senha="";
$bd="bdcadastro";

//Cria a conexao
$conexao=mysqli_connect($servidor,$usuario,$senha,$bd);

//checa a conexao
if(!$conexao){
    die ("Falha de conexão:".mysqli_connect_error());
}

?>