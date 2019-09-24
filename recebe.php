<?php
$nomeDigitado = $_GET['nome'];
$descricaoDigitado = $_GET['descricao'];
$valorDigitado = $_GET['valor'];

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bdTeste"; // acessando o banco

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Insere valores na tabela
 $sql = "INSERT INTO itens (nome, descricao, valor) 
 VALUES ('$nomeDigitado', '$descricaoDigitado', '$valorDigitado')";
 
 if (mysqli_query($conexao, $sql)) {
	 echo "Registro criado com sucesso!<br>";
 } else {
	 echo "Erro na criação do registro: " . mysqli_error($conexao);
 }
 
 mysqli_close($conexao);
 ?>
