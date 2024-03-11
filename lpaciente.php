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
          <img class="icon" src="./assets/iconmed.svg" alt="iconmed">
        </div>
      </div>
      <div class="minorbox2">
        <div class="right-login">
          <div class="select-one">
            <ul class="nav nav-underline">
              <li class="nav-item">
                <a class="nav-link" onclick="irL()">Laboratório</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="irM()">Médico</a>
              </li>
              <!--Não conseguimos fazer o botão do paciente funcionar-->
              <li class="nav-item">
                <a class="nav-link active" onclick="irP()">Paciente</a>
              </li>
            </ul>
            <div class="dark-mode-icon">
              <i id="moon" class="fa-solid fa-moon fa-2xl"></i>
            </div>
          </div>
          <div class="error-container">
            <h1>Login</h1>
            <?php
            if (isset($_GET['cpf']) && isset($_GET['nomepac'])) {
              $cpf = $_GET['cpf'];
              $nome = $_GET['nomepac'];

              include_once("conexao.php");

              $verificasql = "SELECT cpf,nome FROM cadpaciente WHERE cpf='$cpf' and nome='$nome';";
              $resultado_verifica = mysqli_query($conexao, $verificasql); //executa o comando
            
              if (mysqli_num_rows($resultado_verifica) > 0) {
                session_start();
                $_SESSION['cpf'] = $cpf;
                header("Location: acessopac.php");
              } else {
                echo "<span class='error-message'><i class='fa-solid fa-xmark' style='color: #ff0000;'></i>Credenciais inválidas</span>";
              }

              mysqli_close($conexao);
            }
            ?>
          </div>
          <form class="login-form" name="logpac" method="get" action="">
            <div class="input">
              <label for=name>
                <div class="inputfield">
                  <i class="fa-solid fa-user"></i>
                  <input class="inputbox" type="text" name="nomepac" placeholder="Nome" required>
                </div>
              </label>
            </div>


            <div class="input">
              <label for=cpf>
                <div class="inputfield">
                <i class="fa-regular fa-address-card"></i>
                  <input class="inputbox" type="text" name="cpf" placeholder="CPF" maxlength="11" required
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                </div>
              </label>
            </div>

            <button class="button-38" type="submit">Acessar</button>

        </div>
        </form>

        </form>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="./js/scripts.js"></script>

</html>