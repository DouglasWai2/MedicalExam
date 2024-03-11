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
	<title>MedicalExam - AcessoMed</title>

</head>

<body class="access-body">
	<header>
		<ul class="nav nav-underline exams-nav">
			<img src="./assets/logo1.png" />
			<li class="nav-item"><a class="nav-link" href="index.html">Sair</a></li>

		</ul>
	</header>
	<main id="conteudo">
		<div class="search-container">
			<form action="" method="get">
				<div>

					<input value="<?php echo isset($_GET['busca']) ? $_GET['busca'] : '' ?>" class="inputbox" type="text" name="busca" placeholder="Escreva o nome">
				</div>
				<button><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>



			<h1>Lista de pacientes</h1>
		</div>
		<?php

		//Conexao com o BD
		include_once("conexao.php");

		$sqlexibir = "select nome,cpf,endereco,email,telefone,datanasc from cadpaciente;";

		$resultado = mysqli_query($conexao, $sqlexibir);

		if (mysqli_num_rows($resultado) > 0 && !isset($_GET["busca"])) {
			echo "<table id='tbpaciente'>";
			echo "
			<thead>
			<tr>
			<th><i class='fa-solid fa-user'></i>NOME</TH>
			<TH><i class='fa-solid fa-id-card'></i>CPF</TH> 
			<TH><i class='fa-solid fa-location-dot'></i>ENDEREÇO</TH> 
			<TH><i class='fa-solid fa-envelope'></i>EMAIL</TH> 
			<TH><i class='fa-solid fa-phone'></i>TELEFONE</TH>
			 <TH><i class='fa-regular fa-calendar'></i>DATA DE NASCIMENTO</TH>
			 <th></th>
			 </tr>
			 </thead>
			 <tbody>
			 ";
			while ($paciente = mysqli_fetch_assoc($resultado)) {
				$date = DateTime::createFromFormat('Y-m-d', $paciente['datanasc']);

				echo "<tr>";
				echo "<td data-label='NOME'>". $paciente['nome'] . "</td>";
				echo "<td data-label='CPF'>" . $paciente['cpf'] . "</td>";
				echo "<td data-label='ENDEREÇO'>" . $paciente['endereco'] . "</td>";
				echo "<td data-label='EMAIL'>" . $paciente['email'] . "</td>";
				echo "<td data-label='TELEFONE'>" . $paciente['telefone'] . "</td>";
				echo "<td data-label='DATA DE NASCIMENTO' >" . $date->format('d/m/Y') . "</td>";
				//link dos exames
				echo "<td class='last-td'> <a href='acessopac.php?cpf=" . $paciente['cpf'] . "'>Exames</a> </td>";
				echo "</tr>";

			}
			echo "</tbody></table>";
		} else if (isset($_GET["busca"])) {
			
			$procurar = $_GET['busca'];
			//Consulta SQL para exibir os dados da tabela tbalunos
			$sqlexibir = "select nome,cpf,endereco,email,telefone,datanasc from cadpaciente WHERE nome LIKE '%$procurar%';";

			$resultado = mysqli_query($conexao, $sqlexibir);

			if (mysqli_num_rows($resultado) > 0) {
				echo "<table id='tbpaciente'>";
				echo "
			<thead>
			<tr>
			<th>NOME</TH>
			<TH>CPF</TH> 
			<TH>ENDEREÇO</TH> 
			<TH>EMAIL</TH> 
			<TH>TELEFONE</TH>
			 <TH>DATA DE NASCIMENTO</TH>
			 <th></th>
			 </tr>
			 </thead>
			 <tbody>
			 ";
				while ($paciente = mysqli_fetch_assoc($resultado)) {
					$date = DateTime::createFromFormat('Y-m-d', $paciente['datanasc']);

					echo "<tr>";
					echo "<td data-label='NOME'>". $paciente['nome'] . "</td>";
				echo "<td data-label='CPF'>" . $paciente['cpf'] . "</td>";
				echo "<td data-label='ENDEREÇO'>" . $paciente['endereco'] . "</td>";
				echo "<td data-label='EMAIL'>" . $paciente['email'] . "</td>";
				echo "<td data-label='TELEFONE'>" . $paciente['telefone'] . "</td>";
				echo "<td data-label='DATA DE NASCIMENTO' >" . $date->format('d/m/Y') . "</td>";
					echo "<td class='last-td'> <a href='acessopac.php?cpf=" . $paciente['cpf'] . "'>Exames</a> </td>";
					echo "</tr>";
				}
				echo "</table>";
			} else {
				echo "<div class='notfound-error'><i class='fa-solid fa-triangle-exclamation'></i>Nenhum registro encontrado.</div>";
			}
		} else {
			echo "<div class='notfound-error'><i class='fa-solid fa-triangle-exclamation'></i>Nenhum registro encontrado.</div>";
		}

		mysqli_close($conexao);

		?>


		</div>
</body>

</html>