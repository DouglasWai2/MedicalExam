<!--CSS feito-->
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
  <title>MedicalExam - Login</title>
</head>


<body>
  <div class="background">
    <div class="card-login" id="card">
      <div class="minorbox">
        <div class="go-home-button" onclick="goHome()">
          <div>
            <i class="fa-light fa-less-than"></i>
            <i class="fa-solid fa-house"></i>
          </div>
          <p>Home</p>
        </div>
        <div class="left-login">
          <img class="icon" src="./assets/icon.svg" alt="icon">
        </div>
      </div>
      <div class="minorbox2">
        <span class="resultado">
        </span>
        <div class="right-login">
          <div class="select-one">
            <ul class="nav nav-underline">
              <li class="nav-item">
                <a class="nav-link active" onclick="irL()">Laboratório</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="irM()">Médico</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="irP()">Paciente</a>
              </li>
            </ul>
            <div class="dark-mode-icon">
              <i id="moon" class="fa-solid fa-moon fa-2xl"></i>
            </div>
          </div>
          <div class="error-container">
            <h1>Login</h1>
            <?php
            if (isset($_GET['nomelab']) && isset($_GET['senhalab'])) {
              $nome = $_GET['nomelab'];
              $senhaL = $_GET['senhalab'];

              include_once("conexao.php");


              $verificasql = "SELECT nomelab,senhalab FROM tblaboratorio WHERE nomelab= '$nome'";
              $resultado_verifica = mysqli_query($conexao, $verificasql); //executa o comando
            
              if (mysqli_num_rows($resultado_verifica) > 0) {
                $row = mysqli_fetch_assoc($resultado_verifica);
                $senhaDoBanco = $row['senhalab'];

                if ($senhaL === $senhaDoBanco) {
                  header("Location: acessolab.php");
                } else {
                  echo "<span class='error-message'><i class='fa-solid fa-xmark' style='color: #ff0000;'></i>Senha inválida</span>";
                }

              }


              mysqli_close($conexao);
            }
            ?>
          </div>

          <form class="login-form" name="loglab" method="get" action="">
            <div class="input">
              <label for="nomelab">
                <div class="inputfield">
                  <i class="fa-solid fa-user"></i>
                  <input class="inputbox" type="text" name="nomelab" placeholder="Nome" required>
                </div>
              </label>
            </div>
            <div class="input">
              <label for="senhalab">
                <div class="inputfield">
                  <i class="fa-solid fa-lock"></i>
                  <input class="inputbox" type="password" name="senhalab" placeholder="Senha" minlength="8"
                    maxlength="8" required>
                </div>
            </div>
            </label>
            <div class="input">
              <label for=cnpj>
                <div class="inputfield">
                <i class="fa-regular fa-id-card"></i>
                  <input class="inputbox" type="text" name="cnpj" placeholder="CNPJ" minlength="16" maxlength="16"
                    required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                </div>
              </label>
            </div>
            <button class="button-38" type="submit">Acessar</button>

            <h3>Ainda não possui um cadastro?</h3>
            <input class="button-38" type="button" value="Cadastrar" onclick="cadLab()">
          </form>

        </div>
      </div>
    </div>
    <script>
      function verificarSenha() {
        var senha = document.getElementById("senha").value;
        var resultado = document.getElementById("resultado");

        if (senha === "senha") {
          resultado.textContent = "Senha correta!";
        } else {
          resultado.textContent = "Senha incorreta!";
        }

        console.log(resultado)
      }
    </script>
  </div>
</body>
<script type="text/javascript" src="./js/scripts.js"></script>

</html>