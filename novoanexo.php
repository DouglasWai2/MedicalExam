<!--Inserir CSS-->
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Open+Sans:wght@300;500;600&display=swap"
    rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
  <title>MedicalExam - Anexar</title>
</head>

<body>
  <header> 
  <ul class="nav nav-underline exams-nav">
    <img src="./assets/logo1.png" />
<li class="nav-item"><a class="nav-link" href="javascript:history.go(-1)">Voltar</a></li>
<li class="nav-item"><a class="nav-link" href="index.html">Sair</a></li>

</ul>
  </header>
  <div class="background">
    <div class="upload-card">

      <form id="form" class="form" name="cadmed" method="POST" enctype="multipart/form-data" action="cadexames.php">
        <input type="hidden" value="<?php echo $_GET['cpf'] ?>" name="cpf">
        <div class="container">
          <h1>Lançamento de exame</h1>
        </div>
          <label for=name>
            <input class="inputbox" type="text" name="nome" placeholder="Nome" required>
          </label>
          <label for=descricao>
            <input class="inputbox" type="text" name="descricao" placeholder="Descrição" required>
          </label>

        <label class="arquivo-label" for=arquivo>
        <i class="fa-solid fa-cloud-arrow-up"></i>
          Inserir arquivo
        </label>
        <input id="arquivo" name="arquivo" class="input-file" type="file" accept=".pdf">



        <button name="upload" class="button-38" type="submit">Salvar</button>

      </form>


</body>

</html>


</body>

</html>