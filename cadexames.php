<?php

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];


include_once("conexao.php");
if(isset($_FILES['arquivo'])) {
$arquivo=$_FILES['arquivo'];
}

if($arquivo['error']){
die("Falha ao enviar arquivo");
}

if($arquivo['size']>2097152) {
die("Arquivo muito grande! Max 2MB");
}

$pasta= "arquivos/";
$nomedoarquivo=$arquivo['name'];
$novonomedoarquivo= uniqid();
$extensao= strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

if($extensao !="pdf") {
die("Tipo de arquivo não aceito");
}

$path= $pasta . $novonomedoarquivo . "." . $extensao;
$deu_certo=move_uploaded_file($arquivo["tmp_name"], $path);
$hoje = date('Y-m-d H:i'); 

if(isset($deu_certo)){
 $query="insert into tbexames values(null, '$path', '$hoje', '$nome', '$descricao','$cpf');";
 mysqli_query($conexao,$query);
 header("Location: exames.php?cpf=$cpf");

}
else {
echo "<p> Falha ao enviar arquivo</p>"; 
}

mysqli_close($conexao);



?>
