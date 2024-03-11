<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <title>MedicalExam - Meus Exames</title>
</head>

<body>
    <?php
    include_once("conexao.php");
    session_start();
    /*$cpf = $_GET['cpf'];*/ 
    if(isset($_GET['cpf'])){
        $cpf=$_GET['cpf'];
    }else{
        $cpf = $_SESSION['cpf'];
    }
    
    ?>
        <header>
            <ul class="nav nav-underline exams-nav">
              <img src="./assets/logo1.png" />
              <li class="nav-item"><a class="nav-link" href="javascript:history.go(-1)">Voltar</a></li>
              <li class="nav-item"><a class="nav-link" href="index.html">Sair</a></li>
        
            </ul>
          </header>
          <main class='exams-main'>
        <?php
        $mysqli_query = "select * from cadpaciente where cpf='$cpf';";
        $resultado = mysqli_query($conexao, $mysqli_query);
        $nome = mysqli_fetch_array($resultado);
        echo "<h1 class='exams-title'> Exames de " . $nome["nome"] . "</h1>";

        ?>
    <table id="tbpaciente" cellpadding="10">

        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>DATA</th>
                <th>EXAMES</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $mysqli_query = "select * from tbexames where cpf_paciente='$cpf';";

            $resultado = mysqli_query($conexao, $mysqli_query);

            if (mysqli_num_rows($resultado) > 0) {
                while ($exame = mysqli_fetch_assoc($resultado)) {
                    $date = DateTime::createFromFormat('Y-m-d', $exame['data_upload']);

                    echo "<tr>";
                    echo "<td>" . $exame['idexame'] . "</td>";
                    echo "<td>" . $exame['nome'] . "</td>";
                    echo "<td>" . $exame['descricao'] . "</td>";
                    echo "<td>" . $date->format('d/m/Y') . "</td>";
                    echo "<td><a target='_blank' href='" . $exame['path'] . "'>Abrir Exame</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<TR><TD colspan='4'>  Nenhum exame encontrado   </td><td></td><td></td></tr>";
            }
            mysqli_close($conexao);

            ?>
            <!-- <td><img height="50" src=" <?php echo $arquivo['path']; ?>" alt=""></td> -->


        </tbody>
    </table>


        </main>
</body>

</HTML>