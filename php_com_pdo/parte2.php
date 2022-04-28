<?php

	$dsn = 'mysql:host=localhost;dbname=php_pdo';
	$usuario = 'root';
	$senha = '';

	try {

		$conexao = new PDO($dsn, $usuario, $senha);


		$query = '
				select * from tb_usuarios
				)
		';

		$stmt = $conexao->query($query); //PDO Statemet
		$lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo '<pre>';
		print_r($lista_usuarios);
		echo '</pre>';

		

	} catch(PDOException $e) {
		/*echo '<pre>';
		print($e);
		echo '</pre>';*/
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();


	}

	




?>