<!--Inserir CSS-->
<!DOCTYPE html>
<html>

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
  <title>MedicalExam - Cadastrar Paciente</title>


</head>

<body>
  <header>
  <ul class="nav nav-underline exams-nav">
    <img src="./assets/logo1.png" />
<li class="nav-item"><a class="nav-link" href="acessolab.php">Voltar</a></li>
<li class="nav-item"><a class="nav-link" href="index.html">Sair</a></li>

</ul>
  </header>
  <div id="conteudo">

    <div class="background">
      <div class="upload-card">

        <form id="form" class="form" name="cadpaciente" method="get" action="cadpaciente.php">
          <div class="container">
            <h1>Cadastrar Paciente</h1>
          </div>
          <label for='nome'>
            <input class="inputbox" type="text" name="nome" placeholder="Nome" required>
          </label>
          <label for='cpfpaciente'>
            <input class="inputbox" type="text" name="cpfpaciente" placeholder="CPF" maxlength="11" required>
          </label>
          <label for='endereco'>
            <input class="inputbox" type="text" name="endereco" placeholder="Rua - N° - Cidade - Estado" required>
          </label>
          <label for='email'>

            <input class="inputbox" type="text" name="email" placeholder="Email">
          </label>
          <label for='telefone'>
            <input class="inputbox" type="tel" name="telefone" placeholder="(xx) xxxxx-xxxx" maxlength="14" required>
          </label>
          <label for='datanasc'>
            <input class="inputbox" type="date" name="datanasc" placeholder="Data de nascimento" required>
          </label>
          <button class="button-38" type="submit">Cadastrar</button>
        </form>
      </div>

</body>

</html>