<?php 
		//define o header como JSON
		header('Content-Type: application/json');

		//pega a requisição enviada pelo JS
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$atribuicao = 1;

		//cria o PDO
		$pdo = new PDO("mysql:host=localhost; dbname=aproximar", "root", "");

		$sql = $pdo->prepare("INSERT INTO usuarios (apelido, email, senha, atribuicao) VALUES ('$nome', '$email', '$senha', '$atribuicao')");

		$sql->execute();

		if($sql)
		{
			echo '<p>Parabens!!! Agora você faz parte da nossa comunidade aproximar =D</p>';
		}else{
			echo '<p>Ooops! faltou alguma coisa? falha ao realizar cadastro.</p>';
		}
 ?>