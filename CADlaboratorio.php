<!--CSS feito-->
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Open+Sans:wght@300;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
  <title>MedicalExam - Cadastrar Laboratório</title>
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
        <div class="right-login">
          <div class="select-one">
            <ul class="nav nav-underline">
              <li class="nav-item">
                <a class="nav-link active" onclick="cadLab()">Laboratório</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="cadMed()">Médico</a>
              </li>
            
            </ul>
            <div class="dark-mode-icon">
              <i id="moon" class="fa-solid fa-moon fa-2xl"></i>
            </div>
          </div>
          <form id="form" class="form login-form" name="cadlab" method="get" action="cadlab.php">
            <div class="container">
              <h1>Cadastro</h1>
            </div>
            <div class="input">
              <label for=name>
                <div class="inputfield">
                  <i class="fa-solid fa-user"></i>
                  <input class="inputbox" type="text" name="nomelab" placeholder="Nome" required>
                </div>
              </label>
            </div>
            <div class="input">
              <label for=senha>
                <div class="inputfield">
                  <i class="fa-solid fa-lock"></i>
                  <input class="inputbox" type="password" name="senhalab" placeholder="Senha" minlength="8" maxlength="8" required>
                </div>
              </label>
            </div>

            <div class="input">
              <label for=cnpj>
                <div class="inputfield">
                  <i class="fa-solid fa-lock"></i>
                  <input class="inputbox" type="text" name="cnpj" placeholder="CNPJ" minlength="16" maxlength="16" required 
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                  />
                </div>
              </label>
            </div>

            <button class="button-38" type="submit">Cadastrar</button>
          </form>
        </div>
      </div>
</body>
<script src="./js/scripts.js"></script>
</html>