<?php

	$dsn = 'mysql:host=localhost;dbname=php_pdo';
	$usuario = 'root';
	$senha = '';

	try {

		$conexao = new PDO($dsn, $usuario, $senha);


		/*$query = '
				create table tb_usuarios(
					id int not null primary key auto_increment,
					nome varchar(50) not null,
					email varchar(100) not null,
					senha varchar(32) not null
				)
		';

		$retorno = $conexao->exec($query);

		echo $retorno;


		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Fabricio Roberto Longuim", "fabricio@teste.com.br", "12345"
			)
		';

		$retorno = $conexao->exec($query);
		echo $retorno;

		$query = 'delete from tb_usuarios';

		$retorno = $conexao->exe($query);
		echo $retorno;

		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Jamilton Damasceno", "jaminlton@teste.com.br", "12345"
			)
		';

		$retorno = $conexao->exec($query);
		echo $retorno;

		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Jorge SantAna", "jorge@teste.com.br", "12345"
			)
		';

		$conexao->exec($query);

		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Dvanei Aparecido", "dvanei@teste.com.br", "12345"
			)
		';

		$conexao->exec($query);

		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Nabucodonosor Silva", "nabucodonosor@teste.com.br", "12345"
			)
		';

		$query = '
			insert into tb_usuarios(
				nome, email, senha
			) values (
				"Maria SantAna", "maria@teste.com.br", "12345"
			)
		';

		$conexao->exec($query);

		*/

		$query = 'select * from tb_usuarios';

		$stmt = $conexao->query($query);
		//print_r($stmt);
		//$lista = $stmt->fetchAll();
		//$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$lista = $stmt->fetchAll(PDO::FETCH_NUM);
		//$lista = $stmt->fetchAll(PDO::FETCH_BOTH);
		$lista = $stmt->fetchAll(PDO::FETCH_OBJ);

		echo '<pre>';
		print_r($lista);
		echo '</pre>';

		//assim é para array
		//echo $lista[0]['nome'];
		//echo $lista[1]['nome'];

		//assim é para objeto o fetch_obj
		echo $lista[1]->nome;
		echo '<br>';

		//assim é para listar apenas um objeto como no caso pelo id
		$query2 = 'select * from tb_usuarios where id = 6';
		$stmt = $conexao->query($query2);
		$usuario = $stmt->fetch(PDO::FETCH_OBJ);

		//tem que fazer isso para ver apenas um usuário, o selecionado
		/*echo '<pre>';
		print_r($usuario);
		echo '</pre>';*/

		echo $usuario->nome;
		echo '<br>';

		//para acessar com o fetch_assoc tem que usar como array para ver o nome
		$query3 = 'select * from tb_usuarios where id = 5';
		$stmt = $conexao->query($query3);
		$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

		echo $usuario['nome'];

	} catch(PDOException $e) {
		/*echo '<pre>';
		print($e);
		echo '</pre>';*/
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();


	}

	




?>